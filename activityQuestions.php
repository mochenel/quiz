<?php
// create actiities Questions here
if(!isset($_SESSION['activities'])){

$activityOneQ = [
    array(
        "question_id" => 1,
        "question_type" => "A",
        "question" => "A variable that holds a true or false value is a, ",
        "points" => "2",
        "answers" => array(
            array("Boolean", true),
            array("boolean", true),
            array("Boolean", true),
            array("boolean", true)
        )
    ),
    array(
        "question_id" => 2,
        "question_type" => "B",
        "question" => "Which of the following best describes an abstract class?",
        "points" => "2",
        "answers" => array(
            array("Consequently, all superclasses are abstract classes.", false),
            array("In life we normally we normally interact with objects that are types of abstract classes.", false),
            array("The reason of non-instantiation is that abstract classes describe or define a thing that is abstrct.", false),
            array("Abstract classes on the other hand are classes that cannot be instantiated, meaning we cannot have objects from the class.", true)
        )

    ),
    array(
        "question_id" => 3,
        "question_type" => "B",
        "question" => "Which one of the following is more correct about the characsteristics of an abstract class?",
        "points" => "2",
        "answers" => array(
            array("An abstract class declares common attributes and behaivours of various classes.", false),
            array("The purpose of an abstract class is to allow classes that are of the same type share common code.", false),
            array("An abstract class can be instantiated.", false),
            array("An abstract class cannot be instantiated.", true)
        )

    ),
    array(
        "question_id" => 4,
        "question_type" => "B",
        "question" => "Which of the following is the correct way to declare an abstract class?",
        "points" => "2",
        "answers" => array(
            array("public abstract class ClassName();", false),
            array("public abstract class ClassName()", false),
            array("public abstract class ClassName{};", false),
            array("public abstract class ClassName{}", true)
        )

    ),
    array(
        "question_id" => 5,
        "question_type" => "A",
        "question" => "The mothods of an interface are by default, ",
        "points" => "2",
        "answers" => array(
            array("Public", false),
            array("private", false),
            array("Private", false),
            array("public", true)
        )

    )
];

$activityTwoQ = [
    array(
        "question_id" => 1,
        "question_type" => "A",
        "question" => "Variables that contain whole numbers are, ",
        "points" => "2",
        "answers" => array(
            array("Integers", true),
            array("integers", true),
            array("Integer", true),
            array("integer", true)
        )
    ),
    array(
        "question_id" => 2,
        "question_type" => "B",
        "question" => "Understanding how object-oriented programming differs from traditional procedural programming requires understanding of which three basic concepts?",
        "points" => "2",
        "answers" => array(
            array("Consequently, all superclasses are abstract classes.", false),
            array("Importing all required libraries.", false),
            array("Declaring all varialbe before coding.", false),
            array("Ploymorphism, Inheritance and Encapsulation.", true)
        )

    ),
    array(
        "question_id" => 3,
        "question_type" => "B",
        "question" => "When it comes to comparing Procedural and Object-Oriented Programming concepts which of the following is correct?",
        "points" => "2",
        "answers" => array(
            array("An instance of classes is a created object that possesses the attributes and methods described.", false),
            array("Encapsulation projects data by hiding it with an object.", false),
            array("Polymorphism is the ability to create classes that share attributes and methods of existing classes.", true),
            array("An abstract class cannot be instantiated.", false)
        )

    ),
    array(
        "question_id" => 4,
        "question_type" => "A",
        "question" => "The mothods of an interface are by default, ",
        "points" => "2",
        "answers" => array(
            array("Public", false),
            array("private", false),
            array("Private", false),
            array("public", true)
        )

    ),
    array(
        "question_id" => 5,
        "question_type" => "B",
        "question" => "Which of the following is the correct way to display output?",
        "points" => "2",
        "answers" => array(
            array("System.out.println", false),
            array("System.out.println()", false),
            array("println()", false),
            array("System.out.println();", true)
        )

    )

];

$activityThreeQ = [
    array(
        "question_id" => 1,
        "question_type" => "A",
        "question" => "The file extension for a java file is? ",
        "points" => "2",
        "answers" => array(
            array(".java", true),
            array(".java", true),
            array(".java", true),
            array(".java", true)
        )
    ),
    array(
        "question_id" => 2,
        "question_type" => "B",
        "question" => "Which is the most correct on how to use a class that is in a package?",
        "points" => "2",
        "answers" => array(
            array("Consequently, all superclasses are abstract classes.", false),
            array("Create two subfolders, src and classes.", false),
            array("Create a folder called test in any location of your computer.", true),
            array("Edit the frontend class.", false)
        )

    ),
    array(
        "question_id" => 3,
        "question_type" => "B",
        "question" => "Which of the following command creates a executable jar file?",
        "points" => "2",
        "answers" => array(
            array("jar –cvmf manifest.txt", false),
            array("jar manifest.txt MyExecutableJarFile.jar za", false),
            array("jar –cvmf manifest.txt MyExecutableJarFile.jar za", true),
            array("jam –cvmf manifest.txt MyExecutableJarFile.jar za", false)
        )

    ),
    array(
        "question_id" => 4,
        "question_type" => "A",
        "question" => "The mothods of an interface are by default, ",
        "points" => "2",
        "answers" => array(
            array("Public", false),
            array("private", false),
            array("Private", false),
            array("public", true)
        )

    ),
    array(
        "question_id" => 5,
        "question_type" => "B",
        "question" => "Analyzing a Java Application that produces console output is done how?",
        "points" => "2",
        "answers" => array(
            array("In the method header public static void main(String[] args), the word public is an access specifier.", false),
            array("In the method header public static void main(String[] args), the word static means that a method is accessible and usable, even though no objectsof the class exist.", false),
            array("In the method header public static void main(String[] args), the word means the main() method is an empty method. ", true)
        )

    )

];

$activityFourQ = [
    array(
        "question_id" => 1,
        "question_type" => "A",
        "question" => "The file extension for a CLASS file is? ",
        "points" => "2",
        "answers" => array(
            array(".java", true),
            array(".", true),
            array(".cls", true),
            array(".CLASS", true)
        )
    ),
    array(
        "question_id" => 2,
        "question_type" => "B",
        "question" => "Which is the most correct on how to use a class that is in a package?",
        "points" => "2",
        "answers" => array(
            array("Consequently, all superclasses are abstract classes.", false),
            array("Create two subfolders, src and classes.", false),
            array("Create a folder called test in any location of your computer.", true),
            array("Edit the frontend class.", false)
        )

    ),
    array(
        "question_id" => 3,
        "question_type" => "B",
        "question" => "Which of the following is a type of way to make comments in java?",
        "points" => "2",
        "answers" => array(
            array("//", false),
            array(">>", false),
            array("..", true),
            array("comment:", false)
        )

    ),
    array(
        "question_id" => 4,
        "question_type" => "A",
        "question" => "Variables that are declared to be used everywhere are called, ",
        "points" => "2",
        "answers" => array(
            array("Public", false),
            array("private", false),
            array("Global", true),
            array("global", true)
        )

    ),
    array(
        "question_id" => 5,
        "question_type" => "B",
        "question" => "Which code will produce a GUI output?",
        "points" => "2",
        "answers" => array(
            array("print.ln", false),
            array("System.out;", false),
            array("JOptionPane.showMessageDialog(null, First Java dialog);", true)
        )

    )

];

$activityFiveQ = [
    array(
        "question_id" => 1,
        "question_type" => "A",
        "question" => "What does SDK stand for? ",
        "points" => "2",
        "answers" => array(
            array("Software Development Kit", true),
            array("software development kit", true),
            array("SDK", false),
            array("sdk", false)
        )
    ),
    array(
        "question_id" => 2,
        "question_type" => "B",
        "question" => "Which is the most correct on how to use a class that is in a package?",
        "points" => "2",
        "answers" => array(
            array("Consequently, all superclasses are abstract classes.", false),
            array("Create two subfolders, src and classes.", false),
            array("Create a folder called test in any location of your computer.", true),
            array("Edit the frontend class.", false)
        )

    ),
    array(
        "question_id" => 3,
        "question_type" => "B",
        "question" => "Which of the following is a type of way to make comments in java?",
        "points" => "2",
        "answers" => array(
            array("//", false),
            array(">>", false),
            array("..", true),
            array("comment:", false)
        )

    ),
    array(
        "question_id" => 4,
        "question_type" => "A",
        "question" => "Variables that are declared to be used everywhere are called, ",
        "points" => "2",
        "answers" => array(
            array("Public", false),
            array("private", false),
            array("Global", true),
            array("global", true)
        )

    ),
    array(
        "question_id" => 5,
        "question_type" => "B",
        "question" => "Creating a Java Application that Produces GUI Output does what exactly?",
        "points" => "2",
        "answers" => array(
            array("A dialog box is a GUI object resembling a window in which you can place messages you want to display.", false),
            array("Different methods can require different numbers of arguments.", false),
            array("You use an append statement when you want to access a built-in Java class that is contained in a group of classes called a package.", true)
        )

    )

];

// Add activities to sesssion variable
$_SESSION['activities'] = [

    [
        'sequence' => 1,
        'current' => true,
        'completed' => false,
        'activity' => $activityOneQ,
        'name' => 'Activity 1',
        'score' => 0
    ],

    [
        'sequence' => 2,
        'current' => false,
        'completed' => false,
        'activity' => $activityTwoQ,
        'name' => 'Activity 2',
        'score' => 0

    ],

    [
        'sequence' => 3,
        'current' => false,
        'completed' => false,
        'activity' => $activityThreeQ,
        'name' => 'Activity 3',
        'score' => 0

    ],

    [
        'sequence' => 4,
        'current' => false,
        'completed' => false,
        'activity' => $activityFourQ,
        'name' => 'Activity 4',
        'score' => 0

    ],

    [
        'sequence' => 5,
        'current' => false,
        'completed' => false,
        'activity' => $activityFiveQ,
        'name' => 'Activity 5',
        'score' => 0

    ],
];

}
