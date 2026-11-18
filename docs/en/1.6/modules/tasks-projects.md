# Tasks and Projects

InvoicePlane provides basic task management that is integrated into the invoice workflow. You can link tasks to projects and projects to clients to structure everthing.

## Projects

Projects can be added from the navigation bar. You can chose the project name and a client. Choosing a client is optional. If you choose a client, tasks that are assigned to this project can onl be added to invoices for the same client.

## Tasks

Tasks can be added from the navigation bar. They have several fields that are explained in the following table.

| Field | Description |
| --- | --- |
| Task name | The title or name of the task. Normally a short headword or sentence |
| Task description | Can contain a long text that discribes the task. Can also be used to store notes. |
| Task price | The price set here will be used in invoices to properly store tasks. The task price is the same as the product price. |
| Tax Rate | Task tax rates are the same like product tax rates. It will be added to the task price if added to an invoice. |
| Finish date | Also called deadline, it defines the date where the task should be finished. Tasks are displayed as overdue (red color) if the finish date has already passed. |
| Status | The task status defines the current state of the task. More information can be found below. |
| Project | This optional select can be used to link tasks to projects. |

### Task Status

A task can have one off the following statuses. Please notice that only completed tasks can be added to invoices.

| Status | Description |
| --- | --- |
| Not started | The title or name of the task. Normally a short headword or sentence |
| In progress | The task is currently in progress. Someone works on the task. |
| Completed | The task was completed and is ready to be added to an invoice. |

### Tasks in Invoices

Inside invoices you can add tasks to an invoice. Therefore, use the "Add Task" button. This will open a new panel where all available tasks will be listed. Please notice that the following requirements must be fullfilled for a tasks to be available:

- the task must be have the status Completed.
- the task must either have no linked project or the client of the current invoice must match theclient that is assigned to the linked project.
