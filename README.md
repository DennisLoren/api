# Student Name Management API

The Student Name Management API is designed to simplify the management of student name records. It caters to educational institutions, online learning platforms, or any system that requires efficient handling of student names. This API empowers developers and administrators to create, retrieve, update, and delete student names with ease, reducing the complexity of managing student data.

## API Description
An API simplifies processes by facilitating smooth data handling, real-time interaction, and safe integration with external services. It provides strong security features, scalable infrastructure, and detailed documentation, enabling developers to build adaptable and effective applications. Enjoy improved features and better user involvement through the use of APIs.

A "Student Name Management API" is an API designed to facilitate the management of student names within an educational system, such as a school, college, or university. It would allow other software systems or applications to interact with and manipulate student names according to the rules and functionalities defined by the API.

### Purpose
The primary purpose of this API is to provide educational institutions and platforms with a reliable and efficient means of managing student name data. By focusing on the core student name records, specifically first name (fname) and last name (lname), it simplifies the administrative tasks associated with student enrollment, directory management, profile updates, and de-enrollment. This purpose aligns with the need to ensure the accuracy of student name records for generating academic reports, tracking attendance, and enhancing overall data management in educational systems.

### Key Features

A simple Student Name Management API typically involves basic operations to manage and retrieve information about students, specifically their first name and last name. Below are the key features of such an API, along with brief descriptions:

a. Add Student Name
- This feature allows you to add new students to the system. You can provide the first name and last name of the student, creating a new student record in the database.

b. Student Retrieval
- With this feature, you can retrieve student information. This is is essential for accessing and displaying student details when needed.
  
c. Update Student Name
- This feature enables you to modify the first name and last name of a student in the system. It's useful for handling scenarios like name changes or corrections in the student records.

d. Delete Student Name
- Delete Student allows you to remove a student's record from the database based on their ID. It's a critical feature for managing student data and maintaining data integrity.
   
## API Endpoints
Here are the API endpoints for the Student Name Management:

1. Insert Name (POST/postName) http://127.0.0.1/api/public/postName
- Function:
  - This endpoint is used to add a new student in the system, creating a student record.
- Required Parameters:
  - lname: The last name of the student to be enrolled.
  - fname: The first name of the student to be enrolled.
  
2. Retrieve Name (GET/printName) http://127.0.0.1/api/public/printName
- Function:
  - This endpoint retrieves a comprehensive directory of all enrolled students, allowing administrators to access and view student information.
- Required Parameters:
  - None. This is typically a read-only operation.

3. Update Name (POST/updateName) http://127.0.0.1/api/public/updateName
- Function:
  - This endpoint allows administrators to update a student's profile information, including their first name and last name, ensuring that student records are accurate and up-to-date.
- Required Parameters:
  - id: The unique identifier of the student whose profile is being updated.
  - lname: The updated last name of the student.
  - fname: The updated first name of the student.

4. Delete Name (POST/deleteName) http://127.0.0.1/api/public/deleteName
- Function:
  - This endpoint is used for de-enrolling a student and removing their record from the system.
- Required Parameters:
  - id: The unique identifier of the student to be de-enrolled.

## Request Payload

a. JSON Payload postName

{
  "lname":"tacubanza",
   "fname":"dennis"
}

- Both lname and fname are required fields. They must be included in the request payload to successfully enroll a new student. These fields ensure that the student's name is accurately recorded in the system.

b. JSON Payload printName

- In the case of the printName endpoint, there is usually no request payload because it is designed to retrieve data, and it doesn't require any specific input parameters in the request body.  As it's a read-only operation, the printName endpoint typically doesn't require any specific parameters in the request payload. 

c. JSON Payload updateName

{
  "id":1,
  "lname":"dela cruz",
   "fname":"juan"
}

- The request payload serves as the data you send to the updateName endpoint to update a specific student's profile. It includes the student's unique identifier (ID) along with the updated first name and last name. This ensures that the student's profile information is accurately modified in the system.

d. JSON Payload deleteName

{
  "id":1
}

- This request payload is used for the deleteName endpoint to identify the specific student record that you want to remove from the system. The id field serves as the key to target the correct student for de-enrollment.

## Response Payload

a. JSON Payload postName

{
         "status":"success","data":null
}

- status (string): This field represents the status of the API response. In this example, it's set to "success," indicating that the API request was processed successfully.
- data (object or null): This field contains the data returned as part of the API response. In this example, it is set to null, meaning that there is no specific data associated with this success response.
- Status: 200 OK

b. JSON Payload postName

{
         "status":"success","data":["lname":"dela cruz","fname":"juan","lname":"tacubanza","fname":"dennis"]
}

- status (string): This field represents the status of the API response, set to "success" to indicate that the API request was processed successfully.
- data (array of objects): This field contains an array of objects where each object represents a student's information, including their first name (fname) and last name (lname).
- Status: 200 OK

c. JSON Payload updateName

{
         "status":"success","data":null
}

- status (string): This field represents the status of the API response. In this example, it's set to "success," indicating that the API request was processed successfully.
- data (null): This field contains null, meaning that there is no specific data associated with this success response. It's indicating that the request was successful, but there is no additional data to be returned in this case.
- Status: 200 OK

d. JSON Payload deleteName

{
         "status":"success","data":null
}

- status (string): This field represents the status of the API response. In this example, it's set to "success," indicating that the API request was processed successfully.
- data (null): This field contains null, meaning that there is no specific data associated with this success response. It's indicating that the request to de-enroll or delete a student was successful, but there is no additional data to be returned in this case.
- Status: 200 OK

## Usage

Step 1: Retrieve an entire repository from a hosted location via URL
- You should initiate the process by using the following command in your command prompt or terminal: "git clone https:/DennisLoren/github.com//api.git." This command will create a local copy of the repository on your computer.

Step 2: Import Database
- Open the SQLYOG and XAMPP, and then proceed to import the 'demo.sql' file into your database. This will set up the necessary database structure and data.

Step 3: Create New Request
- Once Postman is open, click the "New" button, and then select "Request" to create a new API request.

Step 4: Configure API Request Type and Endpoint URL
- Start by selecting the appropriate HTTP method (e.g., POST) based on the action you want to perform. Then, input the API URL, including the specific endpoint you intend to access (e.g., "http://localhost/api/public/postName"). This configuration is crucial for defining the nature and destination of your API request.

Step 5: Define Request Payload
- When utilizing a POST or PUT request to add or update data, navigate to the "Body" tab. Select the "raw" data format, typically in JSON, and input the JSON payload in the request body. This step is essential for providing the data you want to send with your request.

Step 6: Send the Request
- To perform the API request, simply click the "Send" button. This action will initiate the request and communicate with the API endpoint.

Step 7: View the Response
- After sending the request, you can view the API's response in the lower part of the window within Postman. Here, you'll find information such as the HTTP status code, response headers, and the response body, which often contains the data provided by the API. This step allows you to examine the outcome of your API request.

Step 8: Test Other Endpoints
- Test the previously described steps with different endpoints, such as 'printName,' 'updateName,' or 'deleteName.' Customize the payloads as required to test a variety of API functionalities. This flexibility allows you to assess and interact with diverse aspects of the API for comprehensive testing.
Provide code examples or instructions on how to use your API. 

## License

No License. For Educational Purposes Only.

## Contributors

- Dennis Loren P. Tacubanza
- Ram Adrian N. Gacutan
- Prof. Manny R. Hortizuela

## Contact

Name: Dennis Loren P. Tacubanza
- Email: dennisloren.tacubanza@student.dmmmsu.edu.ph
- Contact: 09103026737

Name: Ram Adrian N. Gacutan
- Email: ramadrian.gacutan@student.dmmmsu.edu.ph
- Contact: 09686769701
