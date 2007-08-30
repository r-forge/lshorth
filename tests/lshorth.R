#test/lshorth.R
# install.packages("lshorth",repos="http://r-forge.r-project.org",type="source")
# remove.packages("lshorth")
# source("/Users/gs/projects/rforge/lshorth/pkg/R/lshorth.R")
# source("/Users/gs/projects/rforge/lshorth/pkg/R/plot.lshorth.R")


getwd()
ls()
library(lshorth)

lshorth
plot.lshorth

lshorth(1)

lshorth(1:2)

lshorth(1:10)

lshorth(1:10,0.1)

lshorth(1:10,0.2)

lshorth(1:10,0.8)

lshorth(1:10,0.9)

lshorth(c(1:10,20:30))

c(1:10,20:30)

lshorth((1:10)*(1:10))

(1:10)*(1:10)

lshorth((1:10)*(1:10),0.1)

lshorth((1:10)*(1:10),0.2)

lshorth((1:10)*(1:10),0.8)

lshorth((1:10)*(1:10),0.9)

# testing labels

x50 <- rnorm(50)
xs <- lshorth(x50)
plot(xs)