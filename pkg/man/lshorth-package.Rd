\encoding{UTF-8}
\name{lshorth-package}
\alias{lshorth-package}
\docType{package}
\title{The Length of the Shorth}
\description{Calculates the (localised) length of the shorth
	and supplies corresponding diagnostic plots.}
\details{
\tabular{ll}{
Package: \tab lshorth\cr
Type: \tab Package\cr
Version: \tab 0.1-5\cr
Date: \tab 2012-03-23\cr
License: \tab LGPL\cr
URL: \tab \url{http://lshorth.r-forge.r-project.org/}\cr

}
The p-shorth at x is the shortest interval containing the point x and a proportion p of the data. 
The location of the p-shorth has slow convergence
and is not very useful as a location estimator.

The length of the shorth however has better convergence and, if localised, 
can be used as a diagnostic tool.
}
\author{G. Sawitzki

Maintainer: G. Sawitzki \email{gs@statlab.uni-heidelberg.de}}
\references{
Grübel, R.: The Length of the Shorth,  \emph{Annals of Statistics} \bold{16.2}, 1988, pp 619--628


Sawitzki, G.: Diagnostic Plots for One-Dimensional Data. In:
	 Dirschedl, P. and Ostermann, R. (eds.): \emph{Computational Statistics. Papers collected 
	 on the Occasion of the 25th Conference on Statistical Computing at Schloss Reisensburg.} Physica-Verlag 1994
	pp. 237--258\cr
	\url{http://statlab.uni-heidelberg.de/reports/by.series/report.08.pdf}


Sawitzki, G.: The Shorth Plot. Technical Report, StatLab Heidelberg 1992\cr 
(revised version included in the documentation which comes with this package. See doc/TheShorthPlot.pdf)	
}
\keyword{ package }
\keyword{ hplot }
\examples{
library(lshorth)
## shorth plot of normal variates
lshorth(rnorm(50))
}

