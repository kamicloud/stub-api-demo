cd ..
javac -d "./storage/generator/classes" -encoding UTF-8 -classpath "./storage/generator/libs/*;./storage/generator/classes;." .\resources\generator\templates\*
java -classpath "./storage/generator/libs/*;./storage/generator/classes;./resources/generator;." com.kamicloud.generator.AutoTest
pause
