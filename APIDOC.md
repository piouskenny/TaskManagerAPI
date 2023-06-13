## APIEND POINTS AND USES

# http://localhost:8000/api/v1/ -> Displays Add current Task that has been Added by the user

# http://localhost:8000/api/v1/signup -> Sign UP a user

# Format

{
"username" : "username",
"email" : "email@example.com",
"password" : "Userpassword"
}

# http://localhost:8000/api/v1/login -> Sign UP a user

# Format

{
"username" : "username",
"password" : "Userpassword"
}

# http://localhost:8000/api/v1/task/create -> to create New Task

The User Id will be gotten Authomatically if the user is Logged in

# http://localhost:8000/api/v1/task/edit/ -> The get request to get and edit a specific task

Please note that you'll have to pass the ID of the intented task to the back of the endpoint like this http://localhost:8000/api/v1/task/edit/1

# http://localhost:8000/api/v1/task/update/ -> The post request to update the selected task

Please note that you'll have to pass the ID of the intented task to the back of the endpoint like this http://localhost:8000/api/v1/task/edit/1