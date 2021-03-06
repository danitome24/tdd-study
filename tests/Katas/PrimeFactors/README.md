# Prime Factors

## About Prime Factors kata

It was invented by Robert C. Martin. It is a simple exercise that helps to understand how to develop the production code with baby steps.

## The exercise

Our target is to write a program that can decompose a natural number in its prime factors. The result can be a simple list of the factors, no need to group them as powers.

## Red-green-refactor cycle

We start the exercise writing a test that will fail. We say that it is "red", because it's the colour used by test frameworks to display failing tests.

Then, we write production code to make that test pass. The framework will display the green colour to show that. We only add new behavior during this phase. The code can be naive or obvious. We don't care about design at this moment, we want a clean, rough, simple, solution that make the test pass.

Whe we are green, **and only then**, we refactor the solution to a cleaner design, addressing duplication, bad names, and other smells. If we don't have enough information to decide, it's better to postpone and introduce a new example to test. So, we will be again in "red".

## TDD Rules

* You can't write any production code until you have first written a failing unit test.
* You can't write more of a unit test than is sufficient to fail, and not compiling is failing.
* You can't write more production code than is sufficient to pass the currently failing unit test.

## Remember

You should practice this very same exercise several times. Not only at this moment, practice it again next year, and the next... If you work with different programming languages, try with them.
