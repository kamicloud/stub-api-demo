#!/usr/bin/env bash
javac -d "./storage/framework/generator/classes" -encoding UTF-8 -classpath "./storage/framework/generator/libs/*:./storage/framework/generator/classes:." ./resources/generator/com/kamicloud/templates/TemplateList.java
java -classpath "./storage/framework/generator/libs/*:./storage/framework/generator/classes:./resources/generator/resources:." com.kamicloud.generator.Generator
