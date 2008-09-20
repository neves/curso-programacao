=begin ordem alfabética
BEGIN   Code, enclosed in {}, to run before the program runs.
END     Code, enclosed in {}, to run when the program ends.
alias   Cria um apelido para um método, operador ou variável global
and     Operador lógico, mesmo que  &&, mas com precedência menor
begin   Begins a code block or group of statements; closes with end.
break   Terminates a while or until loop, or a method inside a block.
case    Compares an expression with a matching when clause; closes with end. See when.
class   Defines a class; closes with end.
def     Defines a method; closes with end.
defined?    A special operator that determines whether a variable, method, super method, or block exists.
do      Begins a block, and executes code in that block; closes with end.
else    Executes following code if previous conditional is not true, set with if, elsif, unless, or case. See if, elsif.
elsif   Executes following code if previous conditional is not true, set with if or elsif.
end     Ends a code block (group of statements) started with begin, class, def, do, if, etc.
ensure    Always executes at block termination; use after last rescue.
false   Logical or Boolean false; instance of FalseClass; a pseudovariable. See true.
for     Begins a for loop; used with in.
if      Executes code block if conditional statement is true. Closes with end. Compare unless, until.
in      Used with for loop. See for.
module  Defines a module; closes with end.
next    Jumps to the point immediately before the evaluation of the loop’s conditional. Compare redo.
nil     Empty, uninitialized, or invalid; always false, but not the same as zero; object of NilClass; a pseudovariable.
not     Logical operator; same as !.
or      Logical operator; same as || except or has lower precedence.
redo    Jumps after a loop’s conditional. Compare next.
rescue  Evaluates an expression after an exception is raised; used before ensure.
retry   When called outside of rescue, repeats a method call; inside rescue, jumps to top of block (begin).
return  Returns a value from a method or block.
self    Current object (receiver invoked by a method); a pseudovariable.
super   Calls method of the same name in the superclass. The superclass is the parent of this class.
then    Separator used with if, unless, when, case, and rescue. May be omitted, unless conditional is all on one line.
true    Logical or Boolean true; instance of TrueClass; a pseudovariable. See false.
undef   Makes a method undefined in the current class.
unless  Executes code block if conditional statement is false. Compare if, until.
until   Executes code block while conditional statement is false. Compare if, unless.
when    Starts a clause (one or more) under case.
while   Executes code while the conditional statement is true.
yield   Executes the block passed to a method.
__FILE__    Name of current source file; a pseudovariable.
__LINE__    Number of current line in the current source file; apseudovariable.
=end

=begin agrupados
BEGIN   Code, enclosed in {}, to run before the program runs.
END     Code, enclosed in {}, to run when the program ends.

alias   Cria um apelido para um método, operador ou variável global
defined?    A special operator that determines whether a variable, method, super method, or block exists.
undef   Makes a method undefined in the current class.

module  Defines a module; closes with end.
def     Defines a method; closes with end.
class   Defines a class; closes with end.
self    Current object (receiver invoked by a method); a pseudovariable.
super   Calls method of the same name in the superclass. The superclass is the parent of this class.

not     Logical operator; same as !.
and     Operador lógico, mesmo que  &&, mas com precedência menor
or      Logical operator; same as || except or has lower precedence.
true    Logical or Boolean true; instance of TrueClass; a pseudovariable. See false.
false   Logical or Boolean false; instance of FalseClass; a pseudovariable. See true.
nil     Empty, uninitialized, or invalid; always false, but not the same as zero; object of NilClass; a pseudovariable.

begin   Begins a code block or group of statements; closes with end.
end     Ends a code block (group of statements) started with begin, class, def, do, if, etc.
yield   Executes the block passed to a method.
return  Returns a value from a method or block.

do      Begins a block, and executes code in that block; closes with end.
else    Executes following code if previous conditional is not true, set with if, elsif, unless, or case. See if, elsif.
elsif   Executes following code if previous conditional is not true, set with if or elsif.

rescue  Evaluates an expression after an exception is raised; used before ensure.
ensure    Always executes at block termination; use after last rescue.

for     Begins a for loop; used with in.
in      Used with for loop. See for.
next    Jumps to the point immediately before the evaluation of the loop’s conditional. Compare redo.
redo    Jumps after a loop’s conditional. Compare next.
break   Terminates a while or until loop, or a method inside a block.
retry   When called outside of rescue, repeats a method call; inside rescue, jumps to top of block (begin).
while   Executes code while the conditional statement is true.
until   Executes code block while conditional statement is false. Compare if, unless.

if      Executes code block if conditional statement is true. Closes with end. Compare unless, until.
then    Separator used with if, unless, when, case, and rescue. May be omitted, unless conditional is all on one line.
unless  Executes code block if conditional statement is false. Compare if, until.
when    Starts a clause (one or more) under case.
case    Compares an expression with a matching when clause; closes with end. See when.

__FILE__    Name of current source file; a pseudovariable.
__LINE__    Number of current line in the current source file; apseudovariable.
=end