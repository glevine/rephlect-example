<?php
namespace App\Controllers;

use App\Models\Employee;

/**
 * The "id" parameter must be at least one digit for any route defined in this class with an "id" parameter.
 * @Route("/Employees", conditions={"id"="\d+"})
 */
class Employees
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return array(
            new Employee('Joe', 'Thompson', 'CEO'),
            new Employee('Sam', 'Smythe', 'CFO'),
            new Employee('Sandra', 'Robertson', 'CPO'),
            new Employee('Thomas', 'Smith', 'CTO'),
        );
    }

    /**
     * @Route("/", verb="post")
     */
    public function create($data = array())
    {
        return new Employee($data['first_name'], $data['last_name'], $data['title']);
    }

    /**
     * Overrides the class level conditions for the "id" parameter. It must be at least three digits.
     * @Route("/:id", conditions={"id"="\d{3,}"})
     *
     * A second route is associated with this method, which takes more than one name parameter.
     * @Route("/:first_name/:last_name", conditions={"first_name"="[a-zA-Z]{3,}", "last_name"="[a-zA-Z]{3,}"})
     */
    public function show($id)
    {
        $args = func_get_args();

        if (count($args) > 1) {
            return new Employee(ucfirst($args[0]), ucfirst($args[1]), 'Director');
        } else {
            return new Employee('Brenda', 'Wylde', 'CIO');
        }
    }

    /**
     * @Route("/:last_name", conditions={"last_name"="[a-zA-Z]{3,}"})
     */
    public function showByLastName($lastName)
    {
        return array(
            new Employee('Bill', ucfirst($lastName), 'Janitor'),
            new Employee('Susan', ucfirst($lastName), 'VP'),
        );
    }

    /**
     * This method is used for both PUT and PATCH.
     * @Route("/:id", verb={"put", "patch"})
     */
    public function update($id, $data = array())
    {
        $employee = $this->show($id);
        $employee->setTitle($data['title']);

        return $employee;
    }

    /**
     * @Route("/:id", verb="delete")
     */
    public function delete($id)
    {
        return $this->show($id);
    }
}
