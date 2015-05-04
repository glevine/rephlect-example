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
#### GET: /Employees/4
```
{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CIO"
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
#### DELETE: /Employees/2
```
{
  "name": "Brenda Wylde",
  "first_name": "Brenda",
  "last_name": "Wylde",
  "title": "CIO"
}
```
