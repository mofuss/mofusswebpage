options(warn=-1)
options(error=NULL)
library(sp)
library(raster)
library(rgdal)
library(glue)
library(tictoc)

CurrDir <- getwd()
#unlink("LULCC//TempRaster//*.*",force=TRUE)
#print(CurrDir)
setwd('..')
setwd('..')
CurrDir <- getwd()
#print(CurrDir)
#tic()

img_newproj <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aNRBmean.tif"),ext=e)
print(extent(img_newproj))
writeGDAL(as(img_newproj, Class = "SpatialPixelsDataFrame"), fname = glue("{CurrDir}/public/maps/gifcountries/HT/aNRBmean.gif"), drivername = "GIF", type = "Byte", mvFlag = 255, colorTables = list(gray.colors(255)))


img_newproj <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aCON_NRBmean.tif"),ext=e)
print(extent(img_newproj))
writeGDAL(as(img_newproj, Class = "SpatialPixelsDataFrame"), fname = glue("{CurrDir}/public/maps/gifcountries/HT/aCON_NRBmean.gif"), drivername = "GIF", type = "Byte", mvFlag = 255, colorTables = list(gray.colors(255)))


img_newproj <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aCON_TOTmean.tif"),ext=e)
print(extent(img_newproj))
writeGDAL(as(img_newproj, Class = "SpatialPixelsDataFrame"), fname = glue("{CurrDir}/public/maps/gifcountries/HT/aCON_TOTmean.gif"), drivername = "GIF", type = "Byte", mvFlag = 255, colorTables = list(gray.colors(255)))






#toc()



