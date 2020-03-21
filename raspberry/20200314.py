# encoding:UTF-8
import random
 
length = random.randint(20, 40)
 
def print_fizzbuzz():  # 関数定義
    print("Fizz Buzz!")
 
 
for i in range(1, length + 1):
    if (i % 3 == 0) and (i % 5 == 0):  # i % 15 == 0
        print_fizzbuzz()  # 関数呼び出し
    elif i % 3 == 0:
        print("Fizz!")
    elif not (i % 5):
        print("Buzz!")
    else:
        print(i)
