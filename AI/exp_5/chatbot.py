import re


def chatbot():
    print("Chatbot: Hello! I am your virtual assistant. Type 'bye' or 'exit' to leave.")

    # 1. The "Brain" (Dictionary)
    # Using a dictionary makes it easy to add new rules without writing endless if/elif statements.
    # The \b ensures we only match whole words (so "hi" won't match inside "this" or "think")
    rules = {
        r"\b(hi|hello|hey|greetings)\b": "Hello! How may I assist you today?",
        r"\b(price|cost|pricing|fee)\b": "For detailed pricing, please visit our website at example.com/pricing.",
        r"\b(contact|support|email|help)\b": "You can reach our support team at support@example.com.",
        r"\b(hours|time|open)\b": "We are open Monday to Friday, 9 AM to 5 PM.",
    }

    while True:
        try:
            # 2. Get Input and Clean It
            # .strip() removes any accidental spaces the user typed before or after their words
            raw_input = input("\nUser: ")
            user_input = raw_input.strip().lower()

            # 3. Handle "Null" or Empty Inputs
            if not user_input:
                print(
                    "Chatbot: You didn't type anything! Could you please repeat that?"
                )
                continue  # Skips the rest of the loop and asks for input again

            # 4. Handle Exit Condition Explicitly
            if user_input in ["bye", "exit", "quit", "goodbye"]:
                print("Chatbot: Thank you for chatting! Have a wonderful day.")
                break

            # 5. Search for a Match
            matched = False
            for pattern, response in rules.items():
                if re.search(pattern, user_input):
                    print(f"Chatbot: {response}")
                    matched = True
                    break  # Stop searching once we find the first match

            # 6. Fallback (If nothing matched)
            if not matched:
                print(
                    "Chatbot: I'm sorry, I don't quite understand. Could you rephrase your question?"
                )

        # 7. Handle Sudden Exits (Ctrl+C)
        except (KeyboardInterrupt, EOFError):
            print("\nChatbot: Connection terminated. Goodbye!")
            break


if __name__ == "__main__":
    chatbot()
