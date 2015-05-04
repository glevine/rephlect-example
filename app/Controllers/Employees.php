<?php
namespace App\Controllers;

use App\Models\Employee;

/**
 * @Route("/Employees")
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
     * @Route("/:id")
     */
    public function show($id)
    {
        return new Employee('Brenda', 'Wylde', 'CIO');
    }

    /**
     * @Route("/:id", verb="put")
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
