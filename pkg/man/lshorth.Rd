\name{lshorth}
\alias{lshorth}
%- Also NEED an '\alias' for EACH other topic documented here.
\title{Length of the Shorth}
\description{
For each data point, calculate the length of the shortest interval containing the point and covering a fraction \code{p} of the data.}
\usage{
lshorth(x, probs = NULL, plot = TRUE, na.rm=FALSE, ...)
}
%- maybe also 'usage' for other objects documented here.
\arguments{
  \item{x}{ a vector of values for which the shorth length is to be computed. }
  \item{probs}{ numeric vector of coverage probabilities with values in \eqn{[0,1]}.}
  \item{plot}{ logical. If \code{TRUE} (default), the length of the shorth is plotted.}
  \item{na.rm}{logical; if \code{TRUE}, missing values are removed from x. If \code{FALSE},
   any missing values cause an error.}
  \item{\dots}{ additional arguments passed to plot }
}
%\details{
%  ~~ If necessary, more details than the description above ~~
%}
\value{
an object of class \code{"lshorth"}
  \item{x }{sorted vector of data}
  \item{lshorth }{matrix of shorth length}
  \item{probs }{vector of coverage probabilities. If \code{probs} is not given,
  a dyadic scale is used based on the sample length.}
}
%\references{ ~put references to the literature/web site here ~ }
\author{G. Sawitzki \email{gs@statlab.uni-heidelberg.de}}
\seealso{ \code{\link{plot.lshorth}}, }
\examples{
## shorth plot of normal variates
lshorth(rnorm(50))
}
% Add one or more standard keywords, see file 'KEYWORDS' in the
% R documentation directory.
\keyword{ dplot }% __ONLY ONE__ keyword per line
\keyword{ smooth }
