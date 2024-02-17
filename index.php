<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Live Search</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


   <script>
      var string = "My name is Muhammad Zubair";
      var newstring = string.replace('Zubair', 'hammad');
      console.log(newstring);
   </script>

   <!-- <div class="container mt-3">
      <h1>Live Search</h1>
      <input type="text" class="form-control" id="searchInput" placeholder="Search students...">
      <ul id="searchResults"></ul>
   </div> -->


   <!-- <script>
      const searchInput = document.getElementById('searchInput');
      const resultsContainer = document.getElementById('searchResults');
      const loadingIndicator = document.createElement('div');
      loadingIndicator.classList.add('loading'); // Add your desired loading indicator styles

      let currentRequest = null;

      function renderResults(data) {
         let html = '';
         if (data.length > 0) {
            html = data.map(student => `<li>${student.name}</li>`).join('');
         } else {
            html = '<li>No results found.</li>';
         }
         return html;
      }

      searchInput.addEventListener('keyup', async (event) => {
         const searchTerm = event.target.value;

         if (searchTerm.length < 3) {
            resultsContainer.innerHTML = '';
            return;
         }

         if (currentRequest) {
            console.log('Skipping request, previous pending');
            return; // Skip if previous request is still pending
         }

         console.log('Sending request for:', searchTerm);
         resultsContainer.appendChild(loadingIndicator); // Show loading indicator

         try {
            console.log('Fetching data...');
            currentRequest = await fetch(`/search-student.php?q=${searchTerm}`); // Replace with your actual API endpoint
            // currentRequest = await fetch(`https://restcountries.com/v3.1/name/pakistan`); // Replace with your actual API endpoint
            console.log('Response received:', currentRequest);
            const data = await currentRequest.json();

            resultsContainer.removeChild(loadingIndicator); // Hide loading indicator

            // Ensure data is received and not empty
            if (!data || data.length === 0) {
               resultsContainer.innerHTML = 'No results found.';
               return;
            }

            console.log('Rendering results...');
            resultsContainer.innerHTML = renderResults(data); // Update results based on received data
         } catch (error) {
            console.error('Error fetching results:', error);
            resultsContainer.removeChild(loadingIndicator); // Hide loading indicator
            resultsContainer.innerHTML = 'An error occurred.';
         } finally {
            currentRequest = null; // Allow next request after completion
         }
      });
   </script> -->



   <script>
      //using aysnc and promise
      // const searchInput = document.getElementById('searchInput');
      // const resultsContainer = document.getElementById('searchResults');
      // const loadingIndicator = document.createElement('div');
      // loadingIndicator.classList.add('loading'); // Add your desired loading indicator styles

      // let currentRequest = null;

      // searchInput.addEventListener('keyup', async (event) => {
      //    const searchTerm = event.target.value;

      //    if (searchTerm.length < 3) {
      //       resultsContainer.innerHTML = '';
      //       return;
      //    }

      //    if (currentRequest && currentRequest.pending) {
      //       console.log('Skipping request, previous pending');
      //       return; // Skip if previous request is still pending
      //    }

      //    console.log('Sending request for:', searchTerm);
      //    resultsContainer.appendChild(loadingIndicator); // Show loading indicator

      //    currentRequest = fetch(`/search-student.php?q=${searchTerm}`) // Replace with your actual API endpoint
      //       .then(response => response.json())
      //       .then(data => {
      //          resultsContainer.removeChild(loadingIndicator); // Hide loading indicator
      //          resultsContainer.innerHTML = renderResults(data); // Update results based on received data
      //       })
      //       .catch(error => {
      //          console.error('Error fetching results:', error);
      //          resultsContainer.removeChild(loadingIndicator); // Hide loading indicator
      //          resultsContainer.innerHTML = 'An error occurred.';
      //       })
      //       .finally(() => {
      //          currentRequest = null; // Allow next request after completion
      //       });
      // });

      // function renderResults(data) {
      //    // Replace with your logic to generate HTML for displaying search results
      //    // Example:
      //    let html = '';
      //    if (data.length > 0) {
      //       html = data.map(student => `<li>${student.name}</li>`).join('');
      //    } else {
      //       html = '<li>No results found.</li>';
      //    }
      //    return html;
      // }
   </script>


   <!-- <script>
      const searchInput = document.getElementById('searchInput');
      const searchResults = document.getElementById('searchResults');

      let previousSearch = '';
      let isRequestPending = false;

      searchInput.addEventListener('input', async () => {
         const currentSearch = searchInput.value.trim();

         if (currentSearch === '' || currentSearch === previousSearch) {
            return;
         }

         previousSearch = currentSearch;
         isRequestPending = true;

         try {
            const response = await fetch(`search-student.php?q=${currentSearch}`);
            const data = await response.json();

            searchResults.innerHTML = '';

            if (data.length > 0) {
               searchResults.classList.remove('d-none');
               data.forEach(student => {
                  const listItem = document.createElement('li');
                  listItem.textContent = student.name;
                  searchResults.appendChild(listItem);
               });
            } else {
               searchResults.classList.add('d-none');
               searchResults.textContent = 'No results found.';
            }
         } catch (error) {
            console.error('Error:', error);
            searchResults.innerHTML = 'Oops! An error occurred.';
         } finally {
            isRequestPending = false;
         }
      });
   </script> -->
</body>

</html>