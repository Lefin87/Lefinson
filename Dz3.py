# задача
# Дано: температура в цельсиях(число) и давление в паскалях (число).
# Написать замерзнет вода или нет.
# Вода замерзает при выполнения двух условий:
# 	1. давление в 10^5 Паскаль
# 	2. температура меньше либо равно 0 градусов по цельсию

temp = -1
ressure = 100000
if temp <= 0 and ressure == 10**5:
    print('Вода замерзнет')

else:
    print('вода не замезнет')



