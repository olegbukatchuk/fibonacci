#!/usr/bin/env python3

fibbonacci_one = 1
fibbonacci_two = 1

number = input("Введите номер элемента в ряде Фиббоначи...\n")
number = int(number)

i = 2

while i < number:
    fibbonacci_sum = fibbonacci_two + fibbonacci_one
    fibbonacci_one = fibbonacci_two
    fibbonacci_two = fibbonacci_sum
    i += 1

print(fibbonacci_sum)
