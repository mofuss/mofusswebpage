#!/usr/bin/env Rscript
version

R.home()
R.home("bin")

CurrDir <- getwd()
print(CurrDir)

installed.packages()

#(.packages())
library(sp)
library(raster)
library(rgdal)
library(glue)
library(tictoc)


print("Hola")
