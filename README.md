# User Information Form and Pie Chart Example

This is a basic web application example that includes a user information form and a pie chart visualization using HTML and JavaScript.

## Features

1. **User Information Form:**
   - Collects user data such as name, age, and education.
   - Basic client-side validation for required fields.

2. **Pie Chart Display:**
   - Utilizes the amcharts library to create a pie chart.
   - Displays user information (name, age) in the chart.

3. **Age Verification:**
   - If the user's age is under 18, they are redirected to [Google.com](https://www.google.com).

## How to Use

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/Nobita246/AppliedCloudComputing.git
   
2. Install Dependencies:

   ```bash
   composer update
   
3.Set Environment Variables:

    ```bash
    cp .env.example .env

4. Run Database Migrations:

    ```bash
    php artisan migrate

5. Serve the Application:

   ```bash
   php artisan serve

