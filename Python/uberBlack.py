from car import Car 

class UberBlack(Car):
    typeCarAccepted = []
    seatsMaterial = str

    def __init__(self, license, driver, typeCarAccepted, seatsMaterial):
        super().__init__(license,driver)
        self.bramd = typeCarAccepted
        self.seatsMaterial = seatsMaterial
