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

crop_extent <- readOGR(glue("{CurrDir}/writable/maps/geojson/coords.geojson"))
e <- extent(bbox(crop_extent))
#print(e)

img_newproj <- raster(glue("{CurrDir}/public/maps/raster/Hansen_GFC2018_treecover2000_m-004proj2.tif"),ext=e)
e <- extent(bbox(crop_extent))
#print(e)

img_crop <- crop(img_newproj, crop_extent)
remove('img_newproj')
img_masked <- mask(img_crop, crop_extent)
remove('img_crop')

writeGDAL(as(img_masked, Class = "SpatialPixelsDataFrame"), fname = glue("{CurrDir}/writable/maps/png/treecover.png"), drivername = "PNG", type = "Byte", mvFlag = 255, colorTables = list(terrain.colors(255)))

#toc()


