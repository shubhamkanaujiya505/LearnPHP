<!-- SELECT column1, column2, ...
FROM table_name
WHERE column_name LIKE pattern; -->
<!-- 

1. Wildcard %:

The % wildcard represents zero, one, or multiple characters. It can be used at the beginning, end, or middle of the pattern.
Example: Search for names starting with "John."
 
SELECT first_name, last_name
FROM employees
WHERE first_name LIKE 'John%';



2. Wildcard _:

The _ wildcard represents a single character.
Example: Search for names with the second letter as "a."
  
SELECT first_name, last_name
FROM employees
WHERE first_name LIKE '_a%';


3. Combining Wildcards:

You can combine % and _ wildcards in a single pattern to match specific patterns.
Example: Search for names with "a" as the second letter and "i" as the fourth letter.

  
   
SELECT first_name, last_name
FROM employees
WHERE first_name LIKE '_a%i%';



4. Negating with NOT LIKE:


You can use NOT LIKE to find rows that do not match the specified pattern.
Example: Search for names that do not contain "Doe."

  
   
SELECT first_name, last_name
FROM employees
WHERE last_name NOT LIKE '%Doe%'; -->