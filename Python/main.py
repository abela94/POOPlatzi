from car import Car
from account import Account

if __name__ == "__main__":
    car = Car("AMS545", Account("Andres Herrera", "ASN545"))
    print(vars(car))

    car2 = Car("AM8945", Account("Andrea Herrera", "ASA545"))
    print(vars(car2))    
