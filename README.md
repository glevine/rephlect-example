# rephlect-example
#### GET: /Employees
```
[
  {
    "name": "Joe Thompson",
    "first_name": "Joe",
    "last_name": "Thompson",
    "title": "CEO"
  },
  {
    "name": "Sam Smythe",
    "first_name": "Sam",
    "last_name": "Smythe",
    "title": "CFO"
  },
  {
    "name": "Sandra Robertson",
    "first_name": "Sandra",
    "last_name": "Robertson",
    "title": "CPO"
  },
  {
    "name": "Thomas Smith",
    "first_name": "Thomas",
    "last_name": "Smith",
    "title": "CTO"
  }
]
```
#### GET: /Employees/123
```
{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CIO"
}
```
#### GET: /Employees/wallace
```
[
  {
    "name": "Bill Wallace",
    "first_name": "Bill",
    "last_name": "Wallace",
    "title": "Janitor"
  },
  {
    "name": "Susan Wallace",
    "first_name": "Susan",
    "last_name": "Wallace",
    "title": "VP"
  }
]
```
#### GET: /Employees/george/simmons
```
{
  "name": "George Simmons",
  "first_name": "George",
  "last_name": "Simmons",
  "title": "Director"
}
```
#### POST: /Employees
```
Content-Type: application/json
Request Body: {"first_name": "Jack", "last_name": "White", "title": "Jack of All Trades"}

{
  "name": "Jack White",
  "first_name": "Jack",
  "last_name": "White",
  "title": "Jack of All Trades"
}
```
#### PUT: /Employees/4
```
Content-Type: application/json
Request Body: {"title": "CMO"}

{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CMO"
}
```
#### PATCH: /Employees/4
```
Content-Type: application/json
Request Body: {"title": "CMO"}

{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CMO"
}
```
#### DELETE: /Employees/2
```
{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CIO"
}
```
