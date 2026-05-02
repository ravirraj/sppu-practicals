def hospital_expert_system(): 
    print("Hospital Expert System") 
    print("Available symptoms:") 
    print("1. fever") 
    print("2. cough") 
    print("3. chest pain") 
    print("4. headache") 
    
    # Try capturing the input securely
    try:
        symptom = input("Enter your symptom: ").lower() 
        if symptom == "fever": 
            print("Advice: Consult General Physician.") 
        elif symptom == "cough": 
            print("Advice: Visit Pulmonology Department.") 
        elif symptom == "chest pain": 
            print("Advice: Consult Cardiology Department immediately.") 
        elif symptom == "headache": 
            print("Advice: Visit Neurology Department.") 
        else: 
            print("Advice: Please consult General Physician.") 
    except EOFError:
        pass

if __name__ == "__main__":
    # Run the expert system 
    hospital_expert_system()
