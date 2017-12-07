# Language: Perl
# Name: Aranya Sen
# GitHub: https://github.com/senaranya

sub fizzbuzz {
    my $n = shift;
    if ($n % 3 == 0 and $n % 5 == 0) {
        return 'FizzBuzz';
    }
    elsif ($n % 3 == 0) {
        return 'Fizz';
    }
    elsif ($n % 5 == 0) {
        return 'Buzz';
    }
    else {
        return "$n";
    }
}

print join("\n", map {fizzbuzz($_)} (1 ... 21));
