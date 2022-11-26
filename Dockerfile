# Using official ubuntu image as a parent image
FROM ubuntu:latest

# Setting the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Getting the updates for Ubuntu and installing python into our environment
RUN apt-get -y update  && apt-get install -y python

# Run app.py when the container launches
CMD ["python", "app.py"]
