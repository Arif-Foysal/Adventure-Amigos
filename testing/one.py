from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time
import threading
import os
from datetime import datetime
def generate_report(results):
    with open("report.txt", "a") as report_file:
        report_file.write(f"Test Type: {test_type}, DateTime: {datetime.now()}\n")
        for result in results:
            report_file.write(result + "\n")
        report_file.write("\n")

def run_tests(test_type):
    results = []
    username = ["164071", "011202224", "rahad"]
    password = [1234, 4567, 0000]

    def login_testing(user, p):
        options = Options()
        options.headless = True
        service = Service(ChromeDriverManager().install())
        driver = webdriver.Chrome(service=service, options=options)
        try:
            t1 = time.time()
            driver.get("http://localhost/login-demo/")
            id = driver.find_element(by=By.ID, value='email')
            pa = driver.find_element(by=By.ID, value='password')
            btn = driver.find_element(by=By.ID, value='login_submit')
            id.send_keys(user)
            pa.send_keys(p)
            btn.click()
            dash = driver.find_element(by=By.XPATH, value='/html/body/h1')
            result = f"User: {user}, Result: {dash.text}, Time taken: {time.time() - t1}"
            results.append(result)
        except Exception as e:
            result = f"User: {user}, Error: {e}"
            results.append(result)
        finally:
            driver.quit()

    threads = []
    for user, p in zip(username, password):
        th = threading.Thread(target=login_testing, args=[user, p])
        threads.append(th)
        th.start()

    for th in threads:
        th.join()

    generate_report(results)

if __name__ == "__main__":
    print("Select the type of test:")
    print("1. Login Test")
    test_type = input("Enter the number of the test you want to run: ")

    if test_type == "1":
        run_tests(test_type)
    else:
        print("Invalid test type selected.")
def login_testing(user,p):
    
    options = Options()
    options.headless = True
    # service = Service("C:/Users/FacultyPC/Documents/chromedriver-win64/chromedriver-win64/chromedriver.exe")
    service = Service(ChromeDriverManager().install())
    driver = webdriver.Chrome(service=service,options=options)
    try:
        t1 = time.time()
        driver.get("http://localhost/Adventure-Amigos/src/login.php")
        id = driver.find_element(by=By.ID,value='email')
        pa = driver.find_element(by=By.ID,value='password')
        btn = driver.find_element(by=By.ID,value='login_submit')
        time.sleep(5)
        id.send_keys(user)
        pa.send_keys(p)
        btn.click()
        dash = driver.find_element(by=By.XPATH,value='/html/body/h1')
        print(dash.text)
        print(f"Time taken for this program:{time.time()-t1}")
    except Exception as e:
        print(f'UserName or password doesnt match:{e}')
    finally:
        driver.quit()

username = ["a@a","011202224","rahad"]
password = ["asdf",4567,0000]

for user,p in zip(username,password):
    th = threading.Thread(target=login_testing,args=[user,p])
    th.start()