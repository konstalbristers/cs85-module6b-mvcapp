I picked the topic of a personal goal tracker because it’s something easy to build but also useful in everyday life. Most people have goals, like exercising more, studying for school, or saving money, so I thought it would make sense to create a tool to keep track of progress. I also wanted a project that would show how the Model-View-Controller (MVC) pattern works without being too complex, and a goal tracker with one model and one view was a good choice.

My app lets a user set the name of a goal and a target number. The user can add progress and see how close they are to finishing. The controller takes the user’s input, updates the model, and then shows the data in the view. The view displays the current progress and has a simple form to update it. Even though the app is small, it uses all the important parts of MVC and Composer’s PSR-4 autoloading.

The hardest part was setting up Composer and PSR-4 correctly. At first, it was confusing to understand how the App\\\\ namespace connects to the src/ folder. Once I learned that the namespace matches the folder path, it became much clearer. Another challenge was keeping the code organized. I wanted to mix some logic into the view at first, but following the MVC pattern forced me to separate the responsibilities, which actually made the project cleaner.

I learned that MVC is helpful even for small projects. Having the model handle the data, the controller manage the input, and the view show the output makes the code easier to read and change later. I also learned how Composer autoloading saves time. It removes the need for a lot of require\_once statements and makes it simple to add new classes.

AI Code Review

For the AI part, I asked an AI tool to write a method that checks if a goal is complete. My prompt was:

“Write a PHP method for a Goal class that checks whether the progress has reached or exceeded the target and returns a boolean value.”

The AI’s answer was:

public function isComplete() {  
    return $this-\>progress \>= $this-\>target;  
}

The code worked and did exactly what I asked. It was short and correct. What it missed was using a return type, which is a good habit in modern PHP. I changed the code to:

public function isComplete(): bool {  
    return $this-\>progress \>= $this-\>target;  
}

This showed me that AI can give good starting code, but you still need to review it and make small improvements. It helped me see how to use AI as a tool while still thinking about good coding practices myself.

