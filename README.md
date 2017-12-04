# Starter Open Source

Contributing to open source projects can be a rewarding way to learn, teach and gain experience.

But getting started, can be a daunting process, some may have fears of being ridiculed for providing wrong solutions or generally not knowing where to start, while some may feel uncomfortable jumping straight in.

Use this project to make your first contribution to an open source project on GitHub.

<hr></hr>

## How to get started
Here are some easy ways to contribute to this project:

<ul>
    <li>
        Add your name to the     <code>CONTRIBUTORS.md</code> file.
    </li>
    <li>Create a simple <code>FizzBuzz</code> script in any language and add it to the scripts directory.</li>
</ul>

## Conventions
Add your name to the <code>CONTRIBUTORS.md</code> file using the following format:
<pre>
### Name: [Your name]
- Place: Country
- GitHub: [GitHub account name](GitHub link)
</pre>

## Create a FizzBuzz script
Add a <code>fizz_buzz_yourusername.xx</code> script to the <code>scripts</code> directory in any language of your choice. Here is a example:

<pre>
// Language: Python
// Name: Wes Murray
// GitHub: https://github.com/getwes

def fizzbuzz(n):

    if n % 3 == 0 and n % 5 == 0:
        return 'FizzBuzz'
    elif n % 3 == 0:
        return 'Fizz'
    elif n % 5 == 0:
        return 'Buzz'
    else:
        return str(n)

print "\n".join(fizzbuzz(n) for n in xrange(1, 21))
</pre>

Don't forget to include the comments as seen above.
Have fun, and welcome to Open Source.

<hr></hr>

Code with <3 by <a href="https://github.com/getwes">getwes</a>


