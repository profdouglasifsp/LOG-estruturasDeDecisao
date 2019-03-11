idade = int(input('Nos conte sua idade: '))
if idade < 13:
    print('Você é criança')
elif idade < 18:
    print('Você é adolescente')
elif idade < 60:
    print('Você é adulto')
else:
    print('Você é idoso')