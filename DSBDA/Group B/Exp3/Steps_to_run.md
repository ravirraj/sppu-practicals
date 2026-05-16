# Experiment 3: Weather Data Analysis - Execution Steps

This document provides detailed step-by-step instructions to compile and run the Weather Data Analysis MapReduce experiment. Run these commands from the `Exp3` folder.

## Pre-requisites
Ensure Hadoop and Java are installed and running.
1. Start all Hadoop daemons if not already running:
   ```bash
   start-all.sh
   ```
2. Verify daemons are running using `jps`. You should see `NameNode`, `DataNode`, `ResourceManager`, `NodeManager`, etc.

## Execution Steps

### 1. Set the Classpath
```bash
export HADOOP_CLASSPATH=$(hadoop classpath)
```

### 2. Prepare HDFS Directories
Create input directory on HDFS and upload the weather sample dataset.
```bash
hdfs dfs -mkdir -p /WeatherTut/Input
hdfs dfs -put sample_weather.txt /WeatherTut/Input/
```

### 3. Compile the Java Code
Compile the `Weather.java` code.
```bash
mkdir -p classes
javac -classpath ${HADOOP_CLASSPATH} -d classes Weather.java
```

### 4. Create the JAR File
```bash
jar -cvf weathertut.jar -C classes/ .
```

### 5. Run the MapReduce Job
```bash
hadoop jar weathertut.jar Weather /WeatherTut/Input /WeatherTut/Output
```

### 6. View the Output
Check the calculated average temperature, dew point, and wind speed.
```bash
hdfs dfs -cat /WeatherTut/Output/part-00000
```
