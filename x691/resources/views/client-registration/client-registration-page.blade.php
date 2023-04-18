<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>X691</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        @include('main-elements.navbar.navbar', ['mode' => 'user'])
        <div class="main">
            <h1 class="text-4xl font-semibold registeration-header">Become Our Client</h1>

            <div class="max-w-xl mr-1">
                <p class="text-base text-left">
                    Dalhousie university’s project courses (CSCI2691/3691/4691) are open to non-profit client projects that require software development work. We operate year round over 3 semesters that start in September, January and May. If you want to become one of our clients please submit a request for proposal by filling out the form below.</span>
                </p>
                <br>
            </div>


            <form class="w-full max-w-lg mb-6" action="{{ route('register')}}" method="POST">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contactName">
                      Contact Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="contactName" name="contactName" type="text" placeholder="Jane Doe">
                  </div>

                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="organization">
                      Organization
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200  rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="organization" name="organization"type="text" placeholder="">
                  </div>

                </div>


                <div class="flex flex-wrap -mx-3 mb-6">

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Email
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" name="email" type="text" placeholder="example@mail.ca">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phoneNumber">
                        Phone Number
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phoneNumber" name="phoneNumber" type="tel" placeholder="(xxx)xxx-xxxx">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="problemBackground" class="block mb-2 text-base font-bold text-gray-900 dark:text-white">PROBLEM BACKGROUND</label>
                    <textarea id="problemBackground" name="problemBackground" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                </div>

                <div class="mb-6">
                  <label class="block mb-2 text-base font-bold text-gray-900 dark:text-white">REQUIREMENTS</label>
                  <div class="flex items-center mb-2">
                    <input id="confidentialityCheckbox" name="confidentialityCheckbox" type="checkbox" value="true" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="confidentialityCheckbox" class="ml-2 mt-0 text-sm font-medium text-gray-900 dark:text-gray-300">Will a confidentiality agreement be required?</label>
                  </div>

                  <div class="flex items-center mb-4">
                    <input id="budgetCheckbox" name="budgetCheckbox" type="checkbox" value="true" class="peer w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="budgetCheckbox" class="ml-2 mt-0 text-sm font-medium text-gray-900 dark:text-gray-300">Do you have a budget for this project?</label>
                    <div class="ml-3 invisible peer-checked:visible">
                      <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="budget" name="budget" type="number" placeholder="Specify Amount">
                    </div>
                  </div>
                </div>

                <div class="mb-6">
                  <label class="block text-left text-base font-bold text-gray-900 dark:text-white mb-2">INTERACTION WITH STUDENTS</label>
                  <p class="text-left p-0 mb-3">
                    Ideally our clients engage with our students so that students gain an understanding of the technical and social aspects of working with non-technical clients. Are you willing to participate in the development of your project through the following forms of interaction:
                  </p>
                  <div class="flex items-start mb-4">
                    <input id="meetStudentsCheckbox" name="meetStudentsCheckbox" type="checkbox" value="true" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="meetStudentsCheckbox" class="ml-2 mt-0 text-sm font-medium text-gray-900 dark:text-gray-300">
                      Meet with students on a bi-weekly basis to review their progress <br> (This begins after the first month when the students enter the execution phase)
                    </label>
                  </div>
                  <div class="flex items-center mb-2">
                    <input id="assistTestCheckbox" name="assistTestCheckbox" type="checkbox" value="true" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="assistTestCheckbox" class="ml-2 mt-0 text-sm font-medium text-gray-900 dark:text-gray-300">
                      Assist with testing your project
                    </label>
                  </div>

                </div>


                <div class="flex justify-end mb-6">
                  <button type="submit" class="text-white bg-emerald-500 hover:bg-emerald-400 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>
