from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time
import threading
from datetime import datetime

# Function to perform login testing
def login_testing(user, p, report_file):
    options = Options()
    options.headless = False  # Set to True for headless mode
    service = Service(ChromeDriverManager().install())
    driver = webdriver.Chrome(service=service, options=options)
    
    try:
        t1 = time.time()
        driver.get("http://localhost/Adventure-Amigos/src/login.php")
        
        # Locate elements and perform login
        id_field = driver.find_element(by=By.ID, value='email')
        password_field = driver.find_element(by=By.ID, value='password')
        btn = driver.find_element(by=By.ID, value='login_submit')
        
        id_field.send_keys(user)
        password_field.send_keys(p)
        btn.click()
        
        time_taken = time.time() - t1
        
        # Determine the result based on redirection or other checks
        if driver.current_url == "http://localhost/Adventure-Amigos/src/hotels.php":
            result = f"SUCCESS: User: {user}, Time taken: {time_taken:.2f} seconds"
        else:
            result = f"FAILURE: User: {user}, Time taken: {time_taken:.2f} seconds"
        
        print(result)
        
        # Append the result to the report file
        with open(report_file, "a") as report:
            report.write(f"{result}\n")
    
    except Exception as e:
        error_msg = f"ERROR: User: {user}, Exception: {str(e)}"
        print(error_msg)
        with open(report_file, "a") as report:
            report.write(f"{error_msg}\n")
    
    finally:
        driver.quit()

# Function to perform another test (placeholder for future tests)
def another_test(report_file):
    # Example placeholder test logic
    with open(report_file, "a") as report:
        report.write(f"--- Another Test ---\n")
        report.write(f"Date-Time: {datetime.now()}\n")
        report.write("Result: Placeholder test completed.\n")
        report.write("\n")
    print("Another test completed.")

# Function to run the selected test
def run_test():
    # Menu to select the type of test
    print("Select the type of test you want to run:")
    print("1. Login Test")
    print("2. Another Test (Placeholder)")
    test_choice = input("Enter test number: ").strip()
    
    report_file = "report.md"
    
    if test_choice == "1":
        usernames = ["a@a", "a@b", "b@b"]
        passwords = ["asdf", "asdf", "0000"]
        
        # Add header to the report file
        with open(report_file, "a") as report:
            report.write(f"--- Test Report ---\n")
            report.write(f"## Test Name: Login Testing\n")
            report.write(f"## Date-Time: {datetime.now()}\n")
            report.write("\n")
        
        threads = []
        for user, p in zip(usernames, passwords):
            # Start a thread for each login attempt
            th = threading.Thread(target=login_testing, args=(user, p, report_file))
            threads.append(th)
            th.start()
        
        # Wait for all threads to complete
        for th in threads:
            th.join()
        
        print("Login Test completed. Check 'report.md' for the results.")
    
    elif test_choice == "2":
        # Add header to the report file for another test
        with open(report_file, "a") as report:
            report.write(f"--- Test Report ---\n")
            report.write(f"Test Name: Another Test\n")
            report.write(f"Date-Time: {datetime.now()}\n")
            report.write("\n")
        
        # Run the placeholder test
        another_test(report_file)
    
    else:
        print("Invalid test choice. Exiting.")

# Main entry point
if __name__ == "__main__":
    run_test()