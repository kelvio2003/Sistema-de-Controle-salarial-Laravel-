#include <stdio.h>
#include <string.h>

// Estrutura para armazenar as taxas de câmbio
typedef struct {
    char code[4];
    double rate;
} Currency;

// Função para obter a taxa de câmbio entre duas moedas
double get_exchange_rate(Currency* currencies, int num_currencies, char* base_currency, char* target_currency) {
    for (int i = 0; i < num_currencies; i++) {
        if (strcmp(currencies[i].code, base_currency) == 0) {
            for (int j = 0; j < num_currencies; j++) {
                if (strcmp(currencies[j].code, target_currency) == 0) {
                    return currencies[j].rate / currencies[i].rate;
                }
            }
        }
    }
    return 0.0; // Retorna 0 se não encontrar a taxa de câmbio
}

// Função para converter o valor de uma moeda para outra
double convert_currency(double amount, char* base_currency, char* target_currency, Currency* currencies, int num_currencies) {
    double exchange_rate = get_exchange_rate(currencies, num_currencies, base_currency, target_currency);
    return amount * exchange_rate;
}

int main() {
    // Taxas de câmbio fictícias
    Currency currencies[] = {
        {"USD", 1.0},
        {"BRL", 5.0},
        {"EUR", 0.9},
        {"JPY", 110.5},
        {"AOK", 600.0}
    };
    int num_currencies = sizeof(currencies) / sizeof(currencies[0]);

    double amount;
    char base_currency[4], target_currency[4];

    printf("Bem-vindo ao Conversor de Moedas!\n");

    while (1) {
        printf("\nSelecione as moedas:\n");
        printf("1. USD - Dólar americano\n");
        printf("2. BRL - Real brasileiro\n");
        printf("3. EUR - Euro\n");
        printf("4. JPY - Iene japonês\n");
        printf("5. AOK - Kwanza\n");
        printf("6. Sair\n");

        int choice;
        printf("Escolha a moeda de origem (número): ");
        scanf("%d", &choice);
        if (choice == 6) {
            printf("Encerrando o programa...\n");
            break;
        }
        switch (choice) {
            case 1: strcpy(base_currency, "USD"); break;
            case 2: strcpy(base_currency, "BRL"); break;
            case 3: strcpy(base_currency, "EUR"); break;
            case 4: strcpy(base_currency, "JPY"); break;
            case 5: strcpy(base_currency, "AOK"); break;
            default: printf("Escolha inválida. Tente novamente.\n"); continue;
        }

        printf("Escolha a moeda de destino (número): ");
        scanf("%d", &choice);
        if (choice == 6) {
            printf("Encerrando o programa...\n");
            break;
        }
        switch (choice) {
            case 1: strcpy(target_currency, "USD"); break;
            case 2: strcpy(target_currency, "BRL"); break;
            case 3: strcpy(target_currency, "EUR"); break;
            case 4: strcpy(target_currency, "JPY"); break;
            case 5: strcpy(target_currency, "AOK"); break;
            default: printf("Escolha inválida. Tente novamente.\n"); continue;
        }

        printf("Digite o valor a ser convertido: ");
        scanf("%lf", &amount);

        double result = convert_currency(amount, base_currency, target_currency, currencies, num_currencies);
        printf("%.2f %s é igual a %.2f %s\n", amount, base_currency, result, target_currency);
    }

    return 0;
}