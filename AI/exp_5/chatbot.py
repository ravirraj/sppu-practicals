def chatbot(): 
    print("Chatbot: Hello! How can I help you?") 
     
    while True: 
        user_input = input("User: ").lower() 

        if "hi" in user_input or "hello" in user_input: 
            print("Chatbot: Hello! How may I assist you?") 
         
        elif "price" in user_input: 
            print("Chatbot: Please visit our website for pricing details.") 
         
        elif "contact" in user_input: 
            print("Chatbot: You can contact us at support@example.com") 
         
        elif "bye" in user_input: 
            print("Chatbot: Thank you! Have a nice day.") 
            break 
         
        else: 
            print("Chatbot: Sorry, I did not understand your query.") 

if __name__ == "__main__":
    # Run chatbot 
    chatbot()
