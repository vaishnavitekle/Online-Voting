// Online C compiler to run C program online
#include <stdio.h>
#include<stdlib.h>
struct node
{
    int data; 
    struct node next; 
    
};
struct node *head;
int menu() 
{
    int choice;
    system("clear"); // system("cls");
    printf("\n0. Exit");
    printf("\n1. Append");
    printf("\n2. Display");
    printf("\n3. Insert at First Position"); 
    printf("\nEnter your choice: "); 
    scanf(" %d",&choice); return choice;
}
 void Insert_At_First_Position()
 { 
     struct node *newnode = (struct node) malloc( sizeof(struct node));
     printf("\nEnter Data:"); 
     scanf(" %d",&newnode->data);
     if( head==NULL )
     {
         head = newnode;
         newnode->next = head;
     }
     else
     {
           struct node *temp = head;
           while( temp->next!=head )
           {
                 temp = temp->next;
           }
                 newnode->next = head;
                 temp->next = newnode;
                 head = newnode;
     }
         printf("\nNode Inserted Successfully.");
 }
     void Display()
     { 
         if( head==NULL )
         {
             printf("\nCircular Linked List is Empty.");
         }
             else
             {
                 struct node *temp = head;
                 while( temp->next!=head ) 
                 {
                     printf(" %d,", temp->data);
                     temp = temp->next; 
                     
                 }
                     printf(" %d", temp->data);
             }
         } 
int main()
{
    int choice
    while(1)
    {
        choice = menu();
        if( choice==0 ) 
        {
            printf("\nProgram Terminated."); 
            break;
        }
        else if( choice==2 ) 
        {
            Display();
        }
        else if( choice==3 )
        {
            Insert_At_First_Position();
        }
            getchar();getchar();
     }
              return 0;
}

