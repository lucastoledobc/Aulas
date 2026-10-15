# C

Criado por Dennis Ritchie em 1972.  

linguagem Linux

Documentação: https://devdocs.io/c/

## Instalação:

### Visual Studio:

Baixe o Visual Studio (https://visualstudio.microsoft.com/pt-br/downloads/) e o Desenvolvimento da �rea de trabalho com C++.

Abra o Developer Command Prompt for VS 2022 e digite `cl` e se estiver funcionando vai aparecer algo como:

```
Microsoft (R) C/C++ Optimizing Compiler Version 19.44.35213 for x86
Copyright (C) Microsoft Corporation.  All rights reserved.

usage: cl [ option... ] filename... [ /link linkoption... ]
```


### Hello World

Entra na pasta e escreva seu arquivo.c, depois v� no Developer PowerShell e escreva `cl arquivo.c` e vai aparecer:

* arquivo.exe
* arquivo.obj (binarios)

Para executar, escreva no terminal: `.\arquivo.exe`


### Variáveis

```
    int myNum = 15;
    printf("%d\n", myNum);
```
%d or %i 	int  
%f or %F 	float  
%lf 	double  
%c 	char  
%s strings


### UTF-8

Adicione a biblioteca 

`#include <locale.h>`

Coloque a linha

`setlocale(LC_ALL, "Portuguese_Brasil");`

E no command prompt execute:

`chcp 65001`