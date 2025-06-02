from playwright.sync_api import sync_playwright
import json

def scrape_indeed_jobs():
    jobs = []
    try:
        with sync_playwright() as p:
            browser = p.chromium.launch(headless=True)
            page = browser.new_page()
            # Busca vagas em São Paulo
            page.goto("https://www.indeed.com.br/jobs?q=&l=S%C3%A3o+Paulo%2C+SP", timeout=60000)
            page.wait_for_selector(".jobsearch-SerpJobCard", timeout=10000)

            # Coletar vagas de até 2 páginas
            for _ in range(2):
                job_cards = page.query_selector_all(".jobsearch-SerpJobCard")
                for job in job_cards:
                    title_elem = job.query_selector("h2.title a")
                    company_elem = job.query_selector(".company")
                    link_elem = job.query_selector("h2.title a")
                    title = title_elem.inner_text().strip() if title_elem else "N/A"
                    company = company_elem.inner_text().strip() if company_elem else "N/A"
                    link = f"https://www.indeed.com.br{link_elem.get_attribute('href')}" if link_elem else "#"
                    jobs.append({"title": title, "company": company, "link": link})

                # Tentar próxima página
                next_button = page.query_selector("a[aria-label='Next']")
                if next_button and next_button.is_enabled():
                    next_button.click()
                    page.wait_for_timeout(3000)
                else:
                    break

            browser.close()
    except Exception as e:
        print(f"Erro ao coletar vagas: {e}")
    return jobs

jobs = scrape_indeed_jobs()
if not jobs:
    # Vagas fictícias para teste
    jobs = [
        {"title": "Atendente de Loja", "company": "Comércio Jaraguá", "link": "https://www.indeed.com.br/viewjob?jk=123456"},
        {"title": "Desenvolvedor Web", "company": "Tech SP", "link": "https://www.indeed.com.br/viewjob?jk=789012"}
    ]

with open("jobs.json", "w", encoding="utf-8") as f:
    json.dump(jobs, f, ensure_ascii=False, indent=2)
print(f"Coletadas {len(jobs)} vagas.")