\name{plot.lshorth}
\alias{plot.lshorth}
%- Also NEED an '\alias' for EACH other topic documented here.
\title{ plot.lshorth }
\description{Plot local shorth length}
\usage{
plot.lshorth(x, y, probs = (1:psteps)/(psteps + 1), psteps = 9,
main = "Shorth", xlab=NULL, 
		ylab=NULL,legend=TRUE, ...)
}
%- maybe also 'usage' for other objects documented here.
\arguments{
  \item{x}{ an object of class lshorth }
  \item{y}{ an object of class lshorth }
  \item{probs}{ coverage probabilities }
  \item{main}{ passed as argument to  \code{title}}
  \item{psteps}{ number of probability levels }
  \item{xlab}{ a label for the \code{x} axis }
  \item{ylab}{ a label for the \code{y} axis }
  \item{legend}{ logical. If TRUE, a legend is included. }
  
  \item{\dots}{ additional arguments passed to plot }
}
\details{
  For each point in \code{x} the length of the shortest interval covering a
  fraction \code{p} of the data is marked.
}
\value{
  an object of class \code{lshorth}. See {\code{\link{lshorth}}}.
}
%\references{ ~put references to the literature/web site here ~ }
\author{G. Sawitzki \email{gs@statlab.uni-heidelberg.de}}
\note{ Scaling still under experiment}

%\seealso{\code{\link{lshorth}}}
%\examples{
%}
% Add one or more standard keywords, see file 'KEYWORDS' in the
% R documentation directory.
\keyword{ hplot }
\keyword{ dplot }% __ONLY ONE__ keyword per line
\keyword{ smooth }