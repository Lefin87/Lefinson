# Дана пицца 8 кусочков. Доступны команды:
# 1. print(‘Взять кусок’)
# 2. print(‘съесть кусок’)
# написать программу, симулующую поедание кусочков пиццы
# (По желанию можно анимацию убывание кусочков пиццы добавить)

pizza = 8
while pizza > 0: #Цикл повторяется пока пицца больше 0
     pizza -= 1
     print(f"Взять кусок ")
     print(f"Съесть кусок ")
else:
    print("Пицца закончилась") #Когда цикл выполнилися без ошибок выводим  пицца закончилась


print("------------------------------------------------")

# Выведите столбец чисел от 1 до 100, используя цикл while

i = 1
while i <= 100:  # Цикл до 100
    print(i)
    i += 1  #Прибавляем еденицу

#Дано число n. Вывести степени этого числа с 1 по 10
#пример

n = 2
for i in range(1,11): #Выбираем диапозон 1-10, 11 заканчивается
    print(f"2^{i} = {n ** i}")
else:
    print("Все готово)")
