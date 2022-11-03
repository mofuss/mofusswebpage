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

img_raster <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aNRBmean.tif"),ext=e)
#img_raster <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aCON_NRBmean.tif"),ext=e)
#img_raster <- raster(glue("{CurrDir}/public/app-assets/assets/tif/HT/aCON_TOTmean.tif"),ext=e)

cellStats(img_raster, sum)
#table(img_raster[],useNA="always")
#hist(img_raster)
freq(img_raster)




#toc()



