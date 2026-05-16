# Experiment 2: Log File Analysis - Execution Steps

This document provides detailed step-by-step instructions to compile and run the Log File Analysis MapReduce experiment. Run these commands from the `Exp2` folder.

## Pre-requisites
Ensure Hadoop and Java are installed and running.
1. Start all Hadoop daemons if not already running:
   ```bash
   start-all.sh
   ```
2. Verify daemons are running using `jps`. You should see `NameNode`, `DataNode`, `ResourceManager`, `NodeManager`, etc.

## Execution Steps

### 1. Set the Classpath
Ensure the Hadoop classpath is set:
```bash
export HADOOP_CLASSPATH=$(hadoop classpath)
```

### 2. Prepare HDFS Directories
Create input directory on HDFS and upload the log file.
```bash
hdfs dfs -mkdir -p /LogFileExp/Input
hdfs dfs -put log_file.txt /LogFileExp/Input/
```

### 3. Compile the Java Code
Compile the Java files inside the `LogFileCountry` package.
```bash
mkdir -p classes
javac -classpath ${HADOOP_CLASSPATH} -d classes LogFileCountry/*.java
```

### 4. Create the JAR File
Create a JAR containing the compiled package.
```bash
jar -cvf analyzelogs.jar -C classes/ .
```

### 5. Run the MapReduce Job
Run the job using the fully qualified driver class name.
```bash
hadoop jar analyzelogs.jar LogFileCountry.LogFileCountryDriver /LogFileExp/Input /LogFileExp/Output
```

### 6. View the Output
Check the output of the frequency of IPs.
```bash
hdfs dfs -cat /LogFileExp/Output/part-00000
```
