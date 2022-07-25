<div id="new-category" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Close Button -->
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="new-category">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
              <div class="py-6 px-6 lg:px-8">
                <!-- Header -->
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add a Pet</h3>
                <!-- Form -->
                <form class="space-y-6" action="index.php" method="post">
                    <div>
                        <label for="pet_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pet Name</label>
                        <input type="text" name="pet_name" id="pet_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                    </div>
                    <div>
                        <label for="pet_age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pet Age</label>
                        <input type="text" name="pet_age" id="pet_age" placeholder="Pet Age" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white row-span-2" required>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pet Type</label>
                        <select name="category" id="category" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                          <option value="">Select Pet Type</option>

                          <!--Fetch Category from database and Put to Dropdown-->
                          <?php
                            $sql = "SELECT petcategoryID, name FROM pet_category";
                            $result = $connectdb->query($sql);
                            while($row = $result->fetch_assoc()) {
                              echo"<option value=$row[petcategoryID]>$row[name]</option>";
                            }
                          ?>
                          </select>

                          <label for="owner" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Owner</label>
                          <select name="owner" id="owner" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                          <option value="">Select Owner</option>
                        <!--Fetch Category from database and Put to Dropdown-->
                          <?php
                            $sql = "SELECT userID, user_firstname, user_lastname FROM users";
                            $result = $connectdb->query($sql);
                            while($row = $result->fetch_assoc()) {
                              echo"<option value=$row[userID]>$row[user_firstname] $row[user_lastname]</option>";
                            }
                          ?>
                        </select>
                        
                    </div>
                    <button type="submit" formaction="../crud/petlist_add.php" class="w-full text-black hover:text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add new service</button>
                </form>
              </div>
            </div>
          </div>
        </div> 