<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book Lists</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <div class="overflow-x-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Book List</h1>
    <table class="w-full text-sm text-left text-gray-700">
        <thead class="text-xs bg-gray-100 text-gray-800">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Published
                </th>
            </tr>
        </thead>
  
