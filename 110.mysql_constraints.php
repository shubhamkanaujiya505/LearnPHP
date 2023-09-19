<!-- 1 .PRIMARY KEY Constraint:

The PRIMARY KEY constraint uniquely identifies each record in a table. It must contain unique values and cannot contain NULL values.
Syntax:

 
 CREATE TABLE table_name (
    column_name data_type PRIMARY KEY,
    ...
);
2. AUTO_INCREMENT Constraint:

The AUTO_INCREMENT constraint is typically used with integer columns to automatically generate unique values as you insert new records.
Syntax:

sql
 
CREATE TABLE table_name (
    column_name INT AUTO_INCREMENT PRIMARY KEY,
    ...
);
3.UNIQUE Constraint:

The UNIQUE constraint ensures that all values in a column are unique, but it allows NULL values.
Syntax:

sql
 
CREATE TABLE table_name (
    column_name data_type UNIQUE,
    ...
);
 4. NOT NULL Constraint:

The NOT NULL constraint ensures that a column cannot contain NULL values.
Syntax:

sql
 
CREATE TABLE table_name (
    column_name data_type NOT NULL,
    ...
);
5. CHECK Constraint:

The CHECK constraint defines a condition that must be true for each row in the table. It can be used to enforce custom data validation rules.
Syntax:

sql
 
CREATE TABLE table_name (
    column_name data_type,
    ...
    CHECK (condition),
    ...
);
6. FOREIGN KEY Constraint:

The FOREIGN KEY constraint establishes a link between two tables. It ensures that values in a column match values in another table's primary key column.
Syntax:

sql
 
CREATE TABLE table_name1 (
    column_name1 data_type,
    ...
    FOREIGN KEY (column_name1) REFERENCES table_name2 (column_name2),
    ...
);
7. DEFAULT Constraint:

The DEFAULT constraint assigns a default value to a column when no value is specified during an INSERT operation.
Syntax:

sql
 
CREATE TABLE table_name (
    column_name data_type DEFAULT default_value,
    ...
);
8. INDEX Constraint:

The INDEX constraint is used to create an index on one or more columns in a table. Indexes improve query performance.
Syntax (Non-Unique Index):

sql
 
CREATE TABLE table_name (
    column_name data_type,
    ...
    INDEX index_name (column_name),
    ...
);
Syntax (Unique Index):

sql
 
CREATE TABLE table_name (
    column_name data_type,
    ...
    UNIQUE INDEX index_name (column_name),
    ...
); -->