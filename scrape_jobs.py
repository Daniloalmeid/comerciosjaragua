from playwright.sync_api import sync_playwright
import json

def scrape_indeed_jobs():
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page()
        page.goto("https://www.indeed.com.br/jobs?q=&l=S%C3%A3o+Paulo%2C+SP")
        jobs = []
        job_cards = page.query_selector_all(".jobsearch-SerpJobCard")
        for job in job_cards:
            title_elem = job.query_selector("h2.title a")
            company_elem = job.query_selector(".company")
            link_elem = job.query_selector("h2.title a")
            title = title_elem.inner_text().strip() if title_elem else "N/A"
            company = company_elem.inner_text().strip() if company_elem else "N/A"
            link = f"https://www.indeed.com.br{link_elem.get_attribute('href')}" if link_elem else "#"
            jobs.append({"title": title, "company": company, "link": link})
        browser.close()
        return jobs

jobs = scrape_indeed_jobs()
with open("jobs.json", "w", encoding="utf-8") as f:
    json.dump(jobs, f, ensure_ascii=False, indent=2)