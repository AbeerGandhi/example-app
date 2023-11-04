  #include <stdio.h>
#include <string.h>
#include <stdio.h>
#define MAX_BOOKS 100

struct Book {
    int B_ID;
    char B_NAME[50];
    float B_COST;
};

void searchByID(struct Book books[], int numBooks, int searchID) {
    int found = 0;
    for (int i = 0; i < numBooks; i++) {
        if (books[i].B_ID == searchID) {
            printf("Book Found:\n");
            printf("Book ID: %d\n", books[i].B_ID);
            printf("Book Name: %s\n", books[i].B_NAME);
            printf("Book Cost: %.2f\n", books[i].B_COST);
            found = 1;
            break;
        }
    }
    if (!found) {
        printf("Book with ID %d not found.\n", searchID);
    }
}

void searchByCost(struct Book books[], int numBooks, float searchCost) {
    int found = 0;
    for (int i = 0; i < numBooks; i++) {
        if (books[i].B_COST == searchCost) {
            printf("Book Found:\n");
            printf("Book ID: %d\n", books[i].B_ID);
            printf("Book Name: %s\n", books[i].B_NAME);
            printf("Book Cost: %.2f\n", books[i].B_COST);
            found = 1;
        }
    }
    if (!found) {
        printf("No books found with cost %.2f\n", searchCost);
    }
}

int main() {
    struct Book books[MAX_BOOKS];
    int numBooks = 0;

    while (1) {
        printf("\nMenu:\n");
        printf("1. Add a Book\n");
        printf("2. Search by Book ID\n");
        printf("3. Search by Book Cost\n");
        printf("4. Exit\n");
        printf("Enter your choice: ");
        int choice;
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                if (numBooks < MAX_BOOKS) {
                    printf("Enter Book ID: ");
                    scanf("%d", &books[numBooks].B_ID);
                    printf("Enter Book Name: ");
                    scanf("%s", books[numBooks].B_NAME);
                    printf("Enter Book Cost: ");
                    scanf("%f", &books[numBooks].B_COST);
                    numBooks++;
                } else {
                    printf("Maximum number of books reached!\n");
                }
                break;
            case 2:
                if (numBooks > 0) {
                    int searchID;
                    printf("Enter Book ID to search: ");
                    scanf("%d", &searchID);
                    searchByID(books, numBooks, searchID);
                } else {
                    printf("No books to search!\n");
                }
                break;
            case 3:
                if (numBooks > 0) {
                    float searchCost;
                    printf("Enter Book Cost to search: ");
                    scanf("%f", &searchCost);
                    searchByCost(books, numBooks, searchCost);
                } else {
                    printf("No books to search!\n");
                }
                break;
            case 4:
                printf("Exiting the program.\n");
                return 0;
            default:
                printf("Invalid choice. Please try again.\n");
        }
    }

    return 0;
}
