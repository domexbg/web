import unittest
import time
import random
from selenium import webdriver

class TestOne(unittest.TestCase):

    def setUp(self):
        # self.driver = webdriver.Firefox()
        self.driver = webdriver.PhantomJS(executable_path='C:\\Users\\Radeff\\node_modules\\phantomjs\\lib\\phantom\\phantomjs.exe')
        self.driver.set_window_size(1120, 550)
        
    def find_element_special(self,tag,attr_name,attr_val):
        element = self.driver.find_elements_by_tag_name(tag)
        for option in element:
            print("Name is: %s" % option.get_attribute(attr_name))
            if option.get_attribute(attr_name) == attr_val:
			    return option
            
    def test_login(self):
        self.driver.get("https://m.abv.bg/")
        self.driver.find_element_by_id(
            'username').send_keys("radev82")
        f = open('abv.txt', 'r')
        p = f.readline()
        self.driver.find_element_by_id(
            'password').send_keys(p)
        self.find_element_special(
            tag = "input",
            attr_val = "submit",
            attr_name = "class"
            ).click()
        # send email
        self.find_element_special(
            tag = "a",
            attr_val = "write",
            attr_name = "class"
            ).click()
        
        self.find_element_special(
            tag = "input",
            attr_val = "TO",
            attr_name = "name"
            ).send_keys("radeff@radeff.eu")
        n = random.randint(1, 100)
        self.find_element_special(
            tag = "input",
            attr_val = "SUBJECT",
            attr_name = "name"
            ).send_keys("test" + str(n))
        self.find_element_special(
            tag = "textarea",
            attr_val = "BODY",
            attr_name = "name"
            ).send_keys("test" + str(n))
        self.find_element_special(
            tag = "input",
            attr_val = "SENDMESSAGE_SEND",
            attr_name = "name"
            ).click()
        
    def tearDown(self):
    
        self.driver.quit()

if __name__ == '__main__':
    unittest.main()
