# World map is available in the maps package
library(maps)
# No margin
Descargado por WEIRDOWARE WDO (weirdoware.sapp@gmail.com)
lOMoARcPSD|24833522
par(mar=c(0,0,0,0))
# World map
map('world',
 col="#f2f2f2", fill=TRUE, bg="white", lwd=0.05,
 mar=rep(0,4),border=0, ylim=c(-80,80)
)
# Dplyr for data wrangling and pipe function
library(dplyr)
# Cities (Longitud, Latitud)
Yukon <- c(-134.15,63.52)
manitoba <- c(-98.73,51.14)
senkaya <- c(42.32,40.635)
provincia_kyzylorda <- c(63.52,45.86)
Myanmar <- c(98.73,21.16)
# Data frame
data <- rbind( Yukon,manitoba,senkaya,provincia_kyzylorda,Myanmar) %>%
 as.data.frame()
colnames(data) <- c("long","lat")
# Show the cities on the map
map('world',
 col="#f2f2f2", fill=TRUE, bg="white", lwd=0.05,
 mar=rep(0,4),border=0, ylim=c(-80,80)
)
Descargado por WEIRDOWARE WDO (weirdoware.sapp@gmail.com)
lOMoARcPSD|24833522
points(x=data$long, y=data$lat, col="slateblue", cex=3, pch=20)
# Load geosphere
library(geosphere)
# Background map
map('world',
 col="#f2f2f2", fill=TRUE, bg="white", lwd=0.05,
 mar=rep(0,4),border=0, ylim=c(-80,80)
)
# Dot for cities
points(x=data$long, y=data$lat, col="slateblue", cex=3, pch=20)
# Compute the connection between Yukon and manitoba
inter <- gcIntermediate(manitoba, Yukon, n=50, addStartEnd=TRUE, breakAtDateLine=F)
# Show this connection
lines(inter, col="slateblue", lwd=2)
# Between manitoba and senkaya
inter <- gcIntermediate(senkaya,manitoba, n=50, addStartEnd=TRUE, breakAtDateLine=F)
lines(inter, col="slateblue", lwd=2)
# Between senkaya and provincia_kyzylorda
inter <- gcIntermediate(provincia_kyzylorda, senkaya, n=50, addStartEnd=TRUE,
breakAtDateLine=F)
lines(inter, col="slateblue", lwd=2)
Descargado por WEIRDOWARE WDO (weirdoware.sapp@gmail.com)
lOMoARcPSD|24833522
# Between provincia_kyzylorda and Myanmar
inter <- gcIntermediate(Myanmar ,provincia_kyzylorda, n=50, addStartEnd=TRUE,
breakAtDateLine=F)
lines(inter, col="slateblue", lwd=2)
