import time
import threading
from datetime import datetime
import statistics
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.common.exceptions import WebDriverException

def single_user_test(response_times, error_count):
    options = Options()
    options.add_argument("--headless")
    options.add_argument("--no-sandbox")
    options.add_argument("--disable-dev-shm-usage")
    
    try:
        service = Service(ChromeDriverManager().install())
        driver = webdriver.Chrome(service=service, options=options)
        
        start_time = time.time()
        driver.get("http://localhost/Adventure-Amigos/src/hotels.php")
        end_time = time.time()
        
        response_time = end_time - start_time
        response_times.append(response_time)
        print(f"User accessed hotels.php in {response_time:.2f} seconds")
    except WebDriverException as e:
        print(f"WebDriver error: {str(e)}")
        error_count[0] += 1
    except Exception as e:
        print(f"Unexpected error: {str(e)}")
        error_count[0] += 1
    finally:
        if 'driver' in locals():
            driver.quit()

def load_test_hotels(num_users, report_file):
    response_times = []
    error_count = [0]  # Using a list to allow modification in threads
    
    threads = []
    for _ in range(num_users):
        thread = threading.Thread(target=single_user_test, args=(response_times, error_count))
        threads.append(thread)
        thread.start()
    
    for thread in threads:
        thread.join()
    
    with open(report_file, "a") as report:
        report.write(f"\n--- Load Test Report ---\n")
        report.write(f"Date-Time: {datetime.now()}\n")
        report.write(f"Test Name: Load Test (hotels.php)\n")
        report.write(f"Number of concurrent users: {num_users}\n")
        report.write(f"Successful requests: {len(response_times)}\n")
        report.write(f"Failed requests: {error_count[0]}\n")
        
        if response_times:
            avg_response_time = statistics.mean(response_times)
            max_response_time = max(response_times)
            min_response_time = min(response_times)
            report.write(f"Average response time: {avg_response_time:.2f} seconds\n")
            report.write(f"Maximum response time: {max_response_time:.2f} seconds\n")
            report.write(f"Minimum response time: {min_response_time:.2f} seconds\n")
        else:
            report.write("No successful requests to calculate statistics.\n")
        
        report.write("\n")
    
    print(f"Load test completed. Results appended to '{report_file}'.")

def run_test():
    print("Select the type of test you want to run:")
    print("1. Login Test")
    print("2. Load Test (hotels.php)")
    test_choice = input("Enter test number: ").strip()
    
    report_file = "report.md"
    
    if test_choice == "1":
        # Login test code (unchanged)
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
        # Get the number of concurrent users for the load test
        num_users = int(input("Enter the number of concurrent users for the load test: "))
        
        # Run the load test
        load_test_hotels(num_users, report_file)
        
        print(f"Load Test completed. Results appended to '{report_file}'.")
    else:
        print("Invalid test choice. Exiting.")

# Main entry point
if __name__ == "__main__":
    run_test()

print("This script demonstrates the structure of the updated load testing code.")
print("It now appends results to the existing 'report.md' file.")
print("To run it, you'd need to set up the proper Python environment and dependencies.")