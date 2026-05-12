import re


def hospital_expert_system():
    print("=== Welcome to the AI Hospital Triage System ===")
    print("Please describe how you are feeling (or type 'exit' to quit).")

    # 1. The Knowledge Base (Dictionary)
    # Maps keywords to the correct hospital department.
    knowledge_base = {
        r"\b(fever|chills|temperature)\b": "General Physician",
        r"\b(cough|breathing|wheezing|asthma)\b": "Pulmonology Department",
        r"\b(chest pain|heart|palpitations)\b": "Cardiology Department (🚨 URGENT)",
        r"\b(headache|migraine|dizzy|dizziness)\b": "Neurology Department",
        r"\b(stomach|nausea|vomiting|diarrhea|belly)\b": "Gastroenterology Department",
        r"\b(bone|fracture|sprain|joint|knee)\b": "Orthopedics Department",
    }

    while True:
        try:
            # 2. Get input and clean it (removes extra spaces and makes it lowercase)
            user_input = input("\nPatient: ").strip().lower()

            # 3. Handle empty inputs and exit commands
            if not user_input:
                continue
            if user_input in ["exit", "quit", "bye"]:
                print("System: Take care! Shutting down.")
                break

            # 4. Analyze Symptoms
            recommended_depts = (
                set()
            )  # A set prevents recommending the same department twice

            for pattern, department in knowledge_base.items():
                if re.search(pattern, user_input):
                    recommended_depts.add(department)

            # 5. Provide the Diagnosis / Recommendation
            if recommended_depts:
                print("System Advice: Based on what you described, you should visit:")
                for dept in recommended_depts:
                    print(f" -> {dept}")

                # Special Emergency Warning
                if "Cardiology Department (🚨 URGENT)" in recommended_depts:
                    print(
                        "*** WARNING: Chest pain can be an emergency. Please call an ambulance! ***"
                    )
            else:
                # Fallback if the system doesn't recognize the words
                print(
                    "System Advice: I couldn't identify a specific department for that."
                )
                print(" -> Please consult a General Physician for a proper checkup.")

        # 6. Handle sudden crashes safely (like pressing Ctrl+C)
        except (KeyboardInterrupt, EOFError):
            print("\nSystem: Emergency shutdown. Goodbye!")
            break


if __name__ == "__main__":
    # Run the expert system
    hospital_expert_system()
