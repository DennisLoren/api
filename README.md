# Student Name Management API

The Student Name Management API is designed to simplify the management of student name records. It caters to educational institutions, online learning platforms, or any system that requires efficient handling of student names. This API empowers developers and administrators to create, retrieve, update, and delete student names with ease, reducing the complexity of managing student data.

## API Description
An API simplifies processes by facilitating smooth data handling, real-time interaction, and safe integration with external services. It provides strong security features, scalable infrastructure, and detailed documentation, enabling developers to build adaptable and effective applications. Enjoy improved features and better user involvement through the use of APIs.

A "Student Name Management API" is an API designed to facilitate the management of student names within an educational system, such as a school, college, or university. It would allow other software systems or applications to interact with and manipulate student names according to the rules and functionalities defined by the API.

Purpose:
The primary purpose of this API is to provide educational institutions and platforms with a reliable and efficient means of managing student name data. By focusing on the core student name records, specifically first name (fname) and last name (lname), it simplifies the administrative tasks associated with student enrollment, directory management, profile updates, and de-enrollment. This purpose aligns with the need to ensure the accuracy of student name records for generating academic reports, tracking attendance, and enhancing overall data management in educational systems.

Key Features:

A simple Student Name Management API typically involves basic operations to manage and retrieve information about students, specifically their first name and last name. Below are the key features of such an API, along with brief descriptions:

1. Student Creation
  This feature allows you to add new students to the system. You can provide the first name and last name of the student, creating a new student record in the database.

2. Student Retrieval
  With this feature, you can retrieve student information. This is is essential for accessing and displaying student details when needed.
  
3. Update Student Names
   This feature enables you to modify the first name and last name of a student in the system. It's useful for handling scenarios like name changes or corrections in the student records.

4. Delete Student
  Delete Student allows you to remove a student's record from the database based on their ID. It's a critical feature for managing student data and maintaining data integrity.

5. Search and Filter
  You can search and filter students based on criteria like their first name, last name, or a combination of both. This functionality helps in locating specific students within a large dataset.

6. List Students
   This feature provides an overview of all students in the database, showing their first names and last names. It's a helpful way to see the complete list of students.

7. Error Handling
   Error Handling is essential for providing clear error messages and status codes in case of invalid requests or server issues. It enhances the API's usability and reliability.
   
## API Endpoints
Here are the API endpoints for the Student Name Management:

http://127.0.0.1/api/public/postName

Function:
  This endpoint is used to add a new student in the system, creating a student record.
Required Parameters:
  lname: The last name of the student to be enrolled.
  fname: The first name of the student to be enrolled.
  
http://127.0.0.1/api/public/printName

Function: 
  This endpoint retrieves a comprehensive directory of all enrolled students, allowing administrators to access and view student information.
Required Parameters: 
  None. This is typically a read-only operation.

http://127.0.0.1/api/public/updateName

Function: 
  This endpoint allows administrators to update a student's profile information, including their first name and last name, ensuring that student records are accurate and up-to-date.
Required Parameters:
  id: The unique identifier of the student whose profile is being updated.
  lname: The updated last name of the student.
  fname: The updated first name of the student.

http://127.0.0.1/api/public/deleteName

Function: 
  This endpoint is used for de-enrolling a student and removing their record from the system.
Required Parameters:
  id: The unique identifier of the student to be de-enrolled.

## Request Payload

a. JSON Payload postName

{
  "lname":"tacubanza",
   "fname":"dennis"
}

Both lname and fname are required fields. They must be included in the request payload to successfully enroll a new student. These fields ensure that the student's name is accurately recorded in the system.

b. JSON Payload printName

In the case of the printName endpoint, there is usually no request payload because it is designed to retrieve data, and it doesn't require any specific input parameters in the request body.  As it's a read-only operation, the printName endpoint typically doesn't require any specific parameters in the request payload. 

c. JSON Payload updateName

{
  "id":1,
  "lname":"dela cruz",
   "fname":"juan"
}

The request payload serves as the data you send to the updateName endpoint to update a specific student's profile. It includes the student's unique identifier (ID) along with the updated first name and last name. This ensures that the student's profile information is accurately modified in the system.

d. JSON Payload deleteName

{
  "id":1
}

This request payload is used for the deleteName endpoint to identify the specific student record that you want to remove from the system. The id field serves as the key to target the correct student for de-enrollment.

## Response Payload

a. JSON Payload postName

{
         "status":"success","data":null
}

status (string): This field represents the status of the API response. In this example, it's set to "success," indicating that the API request was processed successfully.

data (object or null): This field contains the data returned as part of the API response. In this example, it is set to null, meaning that there is no specific data associated with this success response.

Success Response
Status: 200 OK
JSON Example:




 


## Usage


Provide code
examples or instructions on how to use your API.


 


## License


Mention the
license under which your API is distributed.


 


## Contributors


List
contributors or give credit to any external libraries or resources used.


 


## Contact
Information


Include contact
information for inquiries or support.
